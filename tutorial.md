# A Demo Tutorial

Start by doing this. It should show nothing running.

```
docker ps
```

Now start a new ubuntu image:

```
docker run -it ubuntu:jammy
```

You should see a command prompt. Now type: `ls -al && touch foo.txt` and you should see a directory listing containing `usr` and `var` folders.
