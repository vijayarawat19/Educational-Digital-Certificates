#!C:\Users\vijaya\AppData\Local\Programs\Python\Python311\python.exe
#!C:\Users\vijaya\AppData\Local\Microsoft\WindowsApps\python.exe                                                           
#print("Content-Type: text/html")
print()
print ("""
    <TITLE>CGI script ! Python</TITLE>
    """)
# import cgi;
import hashlib;
import time;

blocks = []

def encrypt_string(hash_string):
    sha_signature = \
        hashlib.sha256(hash_string.encode()).hexdigest()
    return sha_signature


def isValidhash(hash):
    if hash.startswith("0000"):
        return True
    return False


def hashBlock(data, timestamp, previoushash, index):
    _hash = ""
    nonce = 0
    while not isValidhash(_hash):
        _input = str(data) + str(timestamp) + str(previoushash) + str(index) + str(nonce)
        _hash = encrypt_string(_input)
        nonce += 1
#        print(nonce)
    blocks.append(_hash)


def getLastHash():
    return blocks[len(blocks) - 1]


def addNewBlock(mmessage):
    _index = len(blocks)
    timestamp = time.time()
    previousHash = getLastHash()
    hashBlock(mmessage, timestamp, previousHash, _index)


def getAllBlocks():
    #for i in range(1, len(blocks)):
    #print(blocks[1] , sep="\n")
	return blocks[1]	
		


def initBlock():
    data = "hello world"
    print("IN INIT BLOCK")
    timestamp = time.time()
    previoushash = 0
    index = 0
    hashBlock(data, timestamp, previoushash, index)
