<h1>RSA-Algorithm Project</h1>


<h2>Part1: RSA (Encryption and Decryption)</h2>

<b>Project objective:</b>
1. Understand the RSA and Implement in real-time. 

<b>Parameter Selection:</b>
write a program such that:
1. Randomly select two prime numbers, denoted by p and q (16 bits each)
2. Compute N=p*q
3. Compute Phi(N)=(p-1)*(q-1)
4. Randomly select a public-key, e, such that e < Phi(N); and e and Phi(N) are relative
prime numbers (gcd(e, Phi(N)) =1).
5. Find the corresponding private-key d such that (e*d) mod Phi(N)=1
6. Publish your public-key (N, e) on the designated data base on Moodle.

<b>Encryption/Decryption:</b>
Write a function to encrypt or decrypt messages using square and multiply. (simply, you
can pass to the function (N, e or d, m or c).

<b>A) Encryption:</b> Send an encrypted message to your Project partner

1. Check your partner name on Moodle.
2. Check your partner public-key (N, e)
3. Choose a small message. Keep in mind that the encrypted message m must be smaller
than N.
4. Encrypt the message using your partner public-key
5. Publish the encrypted message on the designated data base on Moodle.

<b>B) Decryption:</b> Decrypt the message received from your Project partner:

1. Check your partner’s database and get the encrypted message.
2. Using your private-key (d), decrypt the message received from your partner
3. Publish the decrypted message on the designated data base on Moodle.


<h2>Part 2: Signature/Verification</h2>

Write a function to sign or verify messages using square and multiply. (you can pass to
the function (N, d or e, m or sig).
You can use your already selected parameters (N, e, and d)

<b>A) Signature:</b>

1. Sign your name without hashing using your private-key (d)
2. Publish the signature along with your name on the designated data base on Moodle.

<b>B) Verification:</b>

1. Use your partner public-key (N, e) and his/her name to verify his/her signature
