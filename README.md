# php.8.2

## Installer Docker in Ubuntu

**1. Open terminal and play commands :**

```nginx=
chmod +x script-docker.sh
```

```nginx=
sudo ./script-docker.sh
```

**2. Copy the key to github (includes ed25519 and your email)**

Create the key (script-cle-ssh-github.sh creates the key and displays it)
[Documentation for create key](https://docs.github.com/fr/authentication/connecting-to-github-with-ssh/generating-a-new-ssh-key-and-adding-it-to-the-ssh-agent)

Insérer la clé dans github
[Documentation for add key in Github](https://docs.github.com/fr/authentication/connecting-to-github-with-ssh/adding-a-new-ssh-key-to-your-github-account)

---

**3. [Download Docker-Desktop for ubuhntu](https://desktop.docker.com/linux/main/amd64/docker-desktop-4.26.0-amd64.deb?utm_source=docker&utm_medium=webreferral&utm_campaign=docs-driven-download-linux-amd64)**

Install it by right-clicking
Install with another program
Setup program

**To connect to Docker Desktop, copy/paste the following command into the terminal and follow the instructions:**

```nginx
gpg --generate-key
```

**4. This will display :**

pub rsa3072 2023-12-05 [SC] [expire : 2025-12-04]

<your key>

uid \<your name\>\<email\>

- copy/paste the following command into the terminal :

```nginx=
pass init <your key>
```

**5. Open docker desktop, click on signup and follow the browser instructions.**

[!IMPORTANT]
If you get a KVM error when opening docker desktop, check that Virtualization mode is enabled in your bios.

---

**6. Docker compose**

```nginx=
docker compose up -d
```

**_docker compose up allows me to build my images and assemble containers.
The -d is used to release the terminal after mounting._**
