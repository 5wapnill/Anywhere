echo "enter the username"
read us
usnm=`id -un`
if [ "$us" == "admin" ]
then
	echo "welcome admin"
else
	echo "Invalid Username"
fi
