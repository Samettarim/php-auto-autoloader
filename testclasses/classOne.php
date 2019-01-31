<?php

namespace testclasses;

class classOne {

    public function method_from_class_one() {
        
       echo '<p>I am Class "<b>' . __CLASS__ . '</b>" have a namespace <b>' . __NAMESPACE__ . '</b> and a method <b>' . __METHOD__ . '</b></p>';
    }

}
