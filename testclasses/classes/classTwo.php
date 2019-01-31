<?php

namespace testclasses\classes;

class class_two {

    public function method_from_class_two() {
        
       echo '<p>I am Class "<b>' . __CLASS__ . '</b> have a method <b>' . __METHOD__ . '</b></p>';
    }

}
