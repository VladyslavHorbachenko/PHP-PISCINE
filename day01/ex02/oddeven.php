#!/usr/bin/php
<?PHP
while(1)
{
print("Enter a number: ");
$line = trim(fgets(STDIN));
  if (is_numeric($line))
  {
    if ($line % 2 == 0)
    {
      print("The number $line is even");
    }
    else
    {
      print("The number $line is odd");
    }
  }
  else
    {
      print("'$line' is not a number");
    }
  print("\n");
  }

?>
