<?php

/**
 *
 * @author Ivan Teleshun <teleshun.ivan@gmail.com>
 * @link http://molotoksoftware.com/
 * @copyright 2016 MolotokSoftware
 * @license GNU General Public License, version 3
 */

/**
 * 
 * This file is part of MolotokSoftware.
 *
 * MolotokSoftware is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * MolotokSoftware is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License
 * along with MolotokSoftware.  If not, see <http://www.gnu.org/licenses/>.
 */


/**
 * Class AuctionBulkChanges
 *
 * Массовые изменения лотов.
 */
class AuctionBulkChanges extends CWidget
{
    public $actionUrl;
    public $lotsCount;
    public $gridId;

    public function init()
    {
        parent::init();
    }

    public function run()
    {


        $this->render('auctionBulkChanges', [
            'actionUrl'            => $this->actionUrl,
            'lotsCount'            => $this->lotsCount,
            'gridId'               => $this->gridId,
        ]);
    }
}