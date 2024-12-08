<?php

/**dulu const bisa dioverride di child. tentu ini berbahaya
 * gunakan kata kunci final
 */

//  class ABC {
//    const ABC = 'ABC';
//  }

//  class DEF extends ABC {
//   const ABC = 'DEF';
//  }

//  var_dump(DEF::ABC);

class ABC {
 final const ABC = 'ABC';
}

class DEF extends ABC {
}

var_dump(DEF::ABC);