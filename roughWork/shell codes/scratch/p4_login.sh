echo "please enter your username"
read uname

if [ $uname == "admin" ]
then
echo "welcome $uname"
else
echo "access denyed!"
fi
