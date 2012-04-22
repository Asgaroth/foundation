from fabric.api import *
from fabric.contrib.files import * 
import datetime

env.user = 'oakw7443'
env.hosts = ['oakwebdev.com']

BACKUPFILE = ''
FILE = ''
VERSION = ""
project_folder = os.path.basename(os.path.dirname(__file__))

LIVE = "html/"+project_folder
BACKUPS = "html/backups/"+project_folder
TMP = "html/versions/"+project_folder
VERSIONS = "../versions/"+project_folder

MYSQL_HOST = ""
MYSQL_USER = ""
MYSQL_PASSWORD = ""
MYSQL_DATABASE = ""



def vars():
    print project_folder
    print LIVE
    print BACKUPS
    print TMP
    print VERSIONS

def setup(version=False):
    global FILE, BACKUPFILE, VERSION
    if version is False:
        FILE  = project_name()+'.tar.gz'
	VERSION = project_name()
    else:
        FILE  = project_folder+"-"+version+'.tar.gz'
	VERSION = project_folder+"-"+version
    BACKUPFILE = project_folder+"_"+datetime.datetime.now().strftime('%Y_%m_%d_%H-%M-%S')+'.tar.gz'
    print "archive filename is:"+FILE
    print "backup filename is:"+BACKUPFILE

def export():
    print "Packing extension..."
    local('tar -czf %s/%s -C protected/extensions foundation ' % (VERSIONS, "yii-"+FILE))
    local('zip -r %s/%s protected/extensions/foundation ' % (VERSIONS, "yii-"+VERSION+".zip"))

def backupproj():
    print "Backing up project"
    run('tar -czf %s/%s %s' % (BACKUPS, BACKUPFILE, LIVE))
    
def backup():
    if not exists(BACKUPS):
        run('mkdir -p %s'% BACKUPS)
    backupproj();

def pack():
    print "Packing project..."
    local('git archive --format=tar HEAD | gzip > %s/%s'% (VERSIONS, FILE))

def deploy(version = False):
    setup(version)
    pack()
    print "Uploading project..."
    put('%s/%s'% (VERSIONS, FILE), '%s/%s'% (TMP, FILE))
    backup();
    run('tar -xzf %s/%s -C %s' % (TMP, FILE, LIVE))

def project_name(revision='HEAD'):
    """
    Returns the a unique name composed in this form:
    `{project_name}_{git_commit_id}`
    """
    if revision:
        commit_id = local('git rev-parse %s' % (revision,), capture=True)
    else:
        commit_id = 'norev'
    return '%s_%s' % (project_folder, commit_id)
