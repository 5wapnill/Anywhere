echo "enter any number"
read a
if [ $((a%7)) -eq 0 ]
then
echo "$a is divisible by 7"
else
echo "$a is not dividible by 7"
fi
