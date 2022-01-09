RSA-Algorithm Project
Part1: RSA (Encryption and Decryption)
Project objective:

Understand the RSA and Implement in real-time.
Parameter Selection: write a program such that:

Randomly select two prime numbers, denoted by p and q (16 bits each)
Compute N=p*q
Compute Phi(N)=(p-1)*(q-1)
Randomly select a public-key, e, such that e < Phi(N); and e and Phi(N) are relative prime numbers (gcd(e, Phi(N)) =1).
Find the corresponding private-key d such that (e*d) mod Phi(N)=1
Publish your public-key (N, e) on the designated data base on Moodle.
Encryption/Decryption: Write a function to encrypt or decrypt messages using square and multiply. (simply, you can pass to the function (N, e or d, m or c).

A) Encryption: Send an encrypted message to your Project partner

Check your partner name on Moodle.
Check your partner public-key (N, e)
Choose a small message. Keep in mind that the encrypted message m must be smaller than N.
Encrypt the message using your partner public-key
Publish the encrypted message on the designated data base on Moodle.
B) Decryption: Decrypt the message received from your Project partner:

Check your partner’s database and get the encrypted message.
Using your private-key (d), decrypt the message received from your partner
Publish the decrypted message on the designated data base on Moodle.
Part 2: Signature/Verification
Write a function to sign or verify messages using square and multiply. (you can pass to the function (N, d or e, m or sig). You can use your already selected parameters (N, e, and d)

A) Signature:

Sign your name without hashing using your private-key (d)
Publish the signature along with your name on the designated data base on Moodle.
B) Verification:

Use your partner public-key (N, e) and his/her name to verify his/her signature
