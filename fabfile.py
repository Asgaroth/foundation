from fabric.api import *
from fabric.contrib.files import * 

env.user = 'oakw7443'
env.hosts = ['oakwebdev.com']

def pack():
    "Packing project..."
    local('git archive --format=tar HEAD | gzip >../versions/foundation/yii.foundation.tar.gz', capture=False)

def deploy():
    pack()
    "Uploading project..."
    dir = 'versions/foundation'
    file = 'yii.foundation.tar.gz'
    put('../versions/foundation/%s'% file, 'html/%s'% dir)
    with cd('html/'):
        if not exists('%s/test'% dir):
            run('mkdir %s/test'% dir)
        run('tar -xzf %s/%s -C %s/test/' % (dir, file, dir))
