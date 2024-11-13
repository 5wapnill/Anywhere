echo "enter any number"
read num

if [ $(($num%7)) -eq 0 ]
then
echo "$num is divisible by 7"
else
echo "$num is not divisible by 7"
fi
