<?php
function ft_is_sort($my_array)
{
  $my_tab = $my_array;
  sort($my_tab);

  if (array_diff_assoc($my_tab, $my_array) == null)
   return 1;
  else
    return 0;

}
?>
