#program for generating keys(p,q,N,ϕ(n),e and d)
import math
import random
import colored
import sys #importing sys module as it provides access to the variables and functions that interact strongly with the python interpreter

#Defining the num of bits
bits=16
print (" No of bits is ", bits)

#generating Random PrimeNumber's
def GenerateRandomPrimeNumbers():
    while(1):
      d = 0
      PrimeNumber = random.randint(32769, 65535) # values should be in between 2**15+1, 2**16-1 (16 bit)
      for i in range(1, PrimeNumber):
         if (PrimeNumber % i == 0):
            d= d+1
      if (d ==1):
         return PrimeNumber

p = GenerateRandomPrimeNumbers()
print ("\n Random 16-bit Prime Number (p): ",p)

q = GenerateRandomPrimeNumbers()
print (" Random 16-bit Prime Number (q): ",q)

#calculating the value N by multiplying the two prime numbers(p & q) generated above 
N=p*q
print ("\n N = p*q =",N)

#calculating ϕ(n)
PHI = (p-1)*(q-1)
print ("\n ϕ(n) = (p-1)*(q-1) =",PHI)

#picking a random value for "e" based on ϕ(n) by making sure that GCD(e,ϕ(n))==1
def GeneratingRandomValueofe(PHI):
  while(1):
      UPHI= round(PHI/2)
      e = random.randint(3, UPHI) #random function in python
      e = (e*2) +1
      if (e%2 == 1 and e < PHI):
         x = PHI
         y = e
         while(y):
             x,y = y, x%y
             if(y == 1):
                 return e

e = GeneratingRandomValueofe(PHI)
print("\n value of ϕ(n) is:", PHI)
print(" value of e is:", e)

#calculating the secret key "d", such that (e*d) mod Phi(N)=1
def GeneratingModInverse(e,PHI):
    s=0; old_s=1
    t=1; old_t=0
    r=e; old_r=PHI
    while r!=0:
        q = old_r//r
        old_r,r = r, old_r - (q*r)
        old_s,s = s, old_s - (q*s)
        old_t,t = t, old_t - (q*t)
    if old_t<0:
        old_t+=PHI
    print('\n gcd of e and ϕ(n)',old_r)
    print(' d=',old_t)
    return old_t

d= GeneratingModInverse(e,PHI)
print ("\n d = e(inverse) mod ϕ(n): =",d)
