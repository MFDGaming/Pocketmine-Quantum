<?php

/*
 * RakLib network library
 *
 *
 * This project is not affiliated with Jenkins Software LLC nor RakNet.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 */

namespace raklib\protocol;

use raklib\Binary;





//#define $this->getFloat() (Binary::readFloat($this->get(4)))
//#define $this->getFloat(accuracy) (Binary::readFloat($this->get(4), accuracy))

//#define $this->getLFloat() (Binary::readLFloat($this->get(4)))
//#define $this->getLFloat(accuracy) (Binary::readLFloat($this->get(4), accuracy))






class UNCONNECTED_PING_OPEN_CONNECTIONS extends UNCONNECTED_PING{
	public static $ID = 0x02;
}
