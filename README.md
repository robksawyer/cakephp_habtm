HABTM Add & Delete Behavior for CakePHP 2.*
===========================================

by Rob Sawyer on June 11, 2013

The easy way to incrementally add|delete an HABTM association records is to use this Behavior, written by [Brandon Parise](http://bakery.cakephp.org/users/view/bparise) [HABTM Add & Delete Behavior (posted May 9th 2007)](http://bakery.cakephp.org/articles/bparise/2007/05/09/add-delete-habtm-behavior). But since it was written by the age of CakePHP v1.2, it seems to malfunction with the current head version of CakePHP Framework. Don't fret though, there is a patch. You can see this over at [ceeram's](https://github.com/ceeram/static_bakery/blob/01a956b7f6071b2c8be7df889997a1f5baa79108/src/articles/2012/01/HABTM-Add-Delete-Behavior-for-CakePHP-2-0.rst) repo. This is a great start, but I think that it could still use some work, along with some test cases. I've created this project to hold these.

Download
--------
Ignore the Cakephp part of the app. At the moment, this is the best way that I've found to quickly implement test cases. Enough about that, you're here for the behavior. You can download the behavior at <https://github.com/robksawyer/cakephp_habtm/blob/master/app/Model/Behavior/ExtendAssociations2Behavior.php>.

Usage
-----

There's no change in usage/method API:

```
    ## add 
    $model->habtmAdd($assoc_name, $from_id, array($to_id1, $to_id2, ...));
    e.g. $this->Post->habtmAdd('PostsTag', 1, array(2, 3));
    
    ## delete
    $model->habtmDelete($assoc_name, $from_id, array($to_id1, $to_id2, ...));
    e.g. $this->Post->habtmAdd('PostsTag', 1, array(3));
    
    ## delete all
    $model->habtmDeleteAll($assoc_name, $from_id);
```

Well thats it for now. Thanks Brian and Toshimasa for sharing such a cool
behavior.