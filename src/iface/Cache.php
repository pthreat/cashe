<?php

	namespace stange\caching\cashe\iface{

		interface Cache{

			/** Load cache **/
			public function load($name);

			/** Save cache **/
			public function save($name,$value);

			/** Save OR load cache **/
			public function sload($name,$value);

			/**
			 * Every cache adapter has an entry point. But what do we mean by entry point?
			 * In the case of a File Adapter cache class this would be a directory
			 * In the case of a PDO Adapter cache class this would be a table on a database
			 * In the case of a Memcache Adapter this would be the parameters 
			 * for being able to connect to the memcached server.
			 */

			public function setEntryPoint($entry);

			public function getEntryPoint();


		}

	}		

