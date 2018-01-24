Debug-Exercise
==============


Errors fixed by PHP file:

add_products_to_cart.php
------------------------

- Line 31
   - _$aryProductArray_ was MISSPELLED as _$aryProductsArray_
   
add_products_to_inventory.php
-----------------------------
- Line 62
    - Removed underscore from _$_thisProductName_

index.php
---------
- Line 27
    - _URL_ROOT_ does not need to be in quotes/apostrophes

view_cart.php
-------------
- Line 35
    - _$aryProductArray_ was misspelled _$aryProductsArray_
- Line 48
    - Missing Semicolon

view_products.php
-----------------
- Line 57
    - Missing closing bracket for switch statement
    
webconfig.php
-------------
- Line 5 & 6
    - Added missing paths for root & URL_ROOT