#Program for Encryption, Decryption, and Signature in RSA Algorithm!
import random
import math

def initDecryption():
     print("Enter Your Public Key N:")
     publicKeyN = int(input())
     print("Enter Your Private key d:")
     PrivateKeyD = int(input())
     print("Please enter the message you want to Decrypt")
     message = str(input())
     message = message.replace('[', '')
     message = message.replace(']', '')
     messages = []
     values = message.split(",")
     for i in values:
        chunk = int(i)
        messageChunk = Decryption(chunk, PrivateKeyD, publicKeyN)
        messages.append(messageChunk)
     print(messages)
     concat = ''.join(messages)
     print(concat)

def Decryption(str, D, N):
    sb=''
    decryptedMessage = Squareandmultiply(str, D, N)
    hexString = hex(decryptedMessage)
    sb +=hexString.replace('0x','')
    bytesFormat = bytes.fromhex(sb)
    dec_message = bytesFormat.decode("ASCII")
    return dec_message

def initEncryption():

     print("Enter Your Partner's Public Key N:")
     publicKeyN = int(input())
     print("Enter Your Partner's Public Key e:")
     publicKeyE = int(input())
     print("Please enter the message you want to enrypt")
     message = str(input())
     List1 = []
     messages = []
     sb = ''
     for i in range(0, len(message), 3):
        if (len(message) - i > 3): 
            substring = message[i:i+3]
            List1.append(substring)
        else:
            substring = message[i :]
            List1.append(substring)
     print(List1)
     for x in List1:
        messageChunk = Encryption(x, publicKeyN, publicKeyE)
        messages.append(messageChunk)
     for i in messages:
        sb = sb+str(i)+','
     sb = sb[0:-1]
     print('['+sb+']')

def Encryption(str, N, e):
     sb = ''
     for i in str:
        ascii = ord(i)
        hexString = hex(ascii)
        sb +=hexString.replace('0x','')
     value = int(sb,16)
     enc_message = Squareandmultiply(value, e, N)
     return enc_message

def Squareandmultiply( str,  e,  N):
    Dict = {} 
    binarystring = bin(e).replace("0b", "")
    reversebinarystring=binarystring[::-1]
    result = 0
    endresult = 1
    for i in range(len(binarystring)):
        if (i == 0):
            result = str
        else:
            result = result * result
            if (result >= N):
                quo = result // N
                result -= quo * N
        Dict[i] =  result
    for j in range(0, len(reversebinarystring)):
        if (reversebinarystring[j] == '1'):
            endresult *= Dict[j]
            if (endresult >= N):
                quo = endresult // N
                endresult -= quo * N

    if (endresult >= N):
        quo = endresult // N
        endresult -=quo * N
    return endresult


def Signature():
     sb =''
     print("Please enter the your Public key N")
     publicKeyN = int(input())
     print("Please enter the your Private key D")
     publicKeyE = int(input())
     print("Please enter Your Signature to be encrypted")
     message = str(input())
     List1 = []
     messages=[]
     for i in range(0, len(message), 3):
        if (len(message) - i > 3): 
            substring = message[i:i+3]
            List1.append(substring)
        else:
            substring = message[i :]
            List1.append(substring)
     print(List1)
     for x in List1:
        messageChunk = Encryption(x, publicKeyN, publicKeyE)
        messages.append(messageChunk)
     for i in messages:
        sb = sb+str(i)+','
     sb = sb[0:-1]
     print('The encrption of my signature is as below : ')
     print('['+sb+']')

def Verification():
     print("Please enter the Partner's Public key N")
     publicKeyN = int(input())
     print("Please enter the Partner's Public key e")
     PrivateKeyD = int(input())
     print("Please enter the patners sign : ")
     sign = str(input())
     print("Please enter the patners ecrypted signature : ")
     message = str(input())
     message = message.replace('[', '')
     message = message.replace(']', '')
     messages = []
     values = message.split(",")
     for i in values:
        chunk = int(i)
        messageChunk = Decryption(chunk, PrivateKeyD, publicKeyN)
        messages.append(messageChunk)
     concat = ''.join(messages)
     if(sign == concat):
         print('Signature verification is: True')
     else:
         print('Signature verification is: False')
     print(concat)


print('This is the program for Encryption && Decryption!')
print('select: \n 1 for Encryption \n 2 for Decryption \n 3 for Signature \n 4 for verifying signature')
selection = int(input())
if selection ==1:
    initEncryption()
if selection ==2:
    initDecryption()
if selection ==3:
    Signature()
if selection ==4:
    Verification()
else:
    print('select a valid option')
