<?php

namespace name_space\namespace2;

class three_class {

    public function method_from_three_class() {
        
       echo '<p>I am Class "<b>' . __CLASS__ . '</b>" have a namespace <b>' . __NAMESPACE__ . '</b> and a method <b>' . __METHOD__ . '</b></p>';
    }

}
