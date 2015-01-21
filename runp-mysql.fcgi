#!flask/bin/python
import os

# use mysql
#os.environ['DATABASE_URL'] = 'mysql+pymysql://apps:vladimir@borisvladimir/apps'
os.environ['DATABASE_URL'] = 'mysql+pymysql://vladimir:vladimir@borisvladimir/apps'

from flipflop import WSGIServer
from app import app

if __name__ == '__main__':
    WSGIServer(app).run()
