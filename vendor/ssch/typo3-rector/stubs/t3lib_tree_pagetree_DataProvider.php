<?php

namespace RectorPrefix20210602;

if (\class_exists('t3lib_tree_pagetree_DataProvider')) {
    return;
}
class t3lib_tree_pagetree_DataProvider
{
}
\class_alias('t3lib_tree_pagetree_DataProvider', 't3lib_tree_pagetree_DataProvider', \false);