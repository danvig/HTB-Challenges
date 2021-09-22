<font size="10">Under Development</font>

​21<sup>th</sup> September 2021

​Challenge Author(s): vigilanted

### Description

Allsafe Cybersecurity have recently employed a team of web devlopers to redesign and overhaul their website. Some nefarious indivdiuals have got wind that there is a secret hidden within the site and as it is still being developed there is a chance to recover this secret.

### Objective

Analyse Allsafe Cybersecurity's new website and find the hidden secret.

### Difficulty

'easy'

### Flag:

'HTB{4lls4f3_br34ch3d}'

# Challenge

This challenge will present the user with a website that is currently under development for Allsafe Cybersecurity. It's up to them to make use of web inspection tools in order to find a hidden login.php page which they can access. Once there, they should inspect the page's source code to find an SHA256 hash. Once they decrypt it, they'll have the password to access the hidden customer portal. This challenge aims to be a simple challenge to introduce the user to a basic tool for web penetration testing.

# Solver

After decrypting the has, they'll have the password to login which will reveal the flag for them to complete the challenge.