<?php

/**
 *
 * bareos-webui - Bareos Web-Frontend
 * 
 * @link      https://github.com/bareos/bareos-webui for the canonical source repository
 * @copyright Copyright (c) 2013-2014 dass-IT GmbH (http://www.dass-it.de/)
 * @license   GNU Affero General Public License (http://www.gnu.org/licenses/)
 * @author    Frank Bergkemper
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace Director\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Bareos\BConsole\BConsoleConnector;

class DirectorController extends AbstractActionController 
{

	protected $directorOutput = array();
	
	public function indexAction()
	{
		$cmd = "status director";
		$config = $this->getServiceLocator()->get('Config');
		$bcon = new BConsoleConnector($config['bconsole']);
		return new ViewModel(array(
				'directorOutput' => $bcon->getBConsoleOutput($cmd),
			));
	}

	public function messagesAction()
	{
		$cmd = "messages";
		$config = $this->getServiceLocator()->get('Config');
                $bcon = new BConsoleConnector($config['bconsole']);
		return new ViewModel(array(
				'directorOutput' => $bcon->getBConsoleOutput($cmd),
			));
	}
	
	public function scheduleAction()
	{
		$cmd = "show schedule";
		$config = $this->getServiceLocator()->get('Config');
                $bcon = new BConsoleConnector($config['bconsole']);
		return new ViewModel(array(
				'directorOutput' => $bcon->getBConsoleOutput($cmd),
			));
	}
	
	public function schedulerstatusAction()
	{
		$cmd = "status scheduler";
		$config = $this->getServiceLocator()->get('Config');
                $bcon = new BConsoleConnector($config['bconsole']);
		return new ViewModel(array(
				'directorOutput' => $bcon->getBConsoleOutput($cmd),
			));
	}
	
	public function versionAction()
	{
		$cmd = "version";
		$config = $this->getServiceLocator()->get('Config');
                $bcon = new BConsoleConnector($config['bconsole']);
		return new ViewModel(array(
				'directorOutput' => $bcon->getBConsoleOutput($cmd),
			));
	}
	
}

