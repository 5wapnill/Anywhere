echo "enter any number"
read num

a=0
b=1
echo $a
echo $b

for((i=1;i<=num;i++))
do
	c=$(($a+$b))
	echo $c
	a=$b
	b=$c
done
