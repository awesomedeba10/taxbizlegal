## Installation

#### Local
```
npm run build
npm run dev
```
```
php artisan serve
```
#### Server
```
npm run build
```

## Git Deploy Guide

In CPanel terminal, create ssh key pair and authorize
```
ssh-keygen -t rsa -b 4096
[better to keep eveything blank]
cd ~/.ssh/
cat id_rsa.pub
```
Copy the public key and paste in GitHub --> Repo --> Settings --> Deploy keys [Allow write access]

Copy git ssh address and clone in cPanel.

Add .cpanel.yml -> ```/bin/cp -r . $DEPLOYPATH``` -> ```npm run build``` -> ```composer install```

In case node installation
```
curl -fsSL https://raw.githubusercontent.com/nvm-sh/nvm/v0.39.4/install.sh | bash
source ~/.bashrc
nvm install --lts
```
```
node -v
npm -v
```
