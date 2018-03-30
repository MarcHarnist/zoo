<?php

			try{
			$fraction = new Fraction();
			echo $fraction;
			}
			catch(NullDiviserException $exception) // NullDiviserException is my own child class of Exception{} of php
			{
				echo "La fraction n'a pas été initialisée.";
			}
			catch(Exception $exception) // You can create several exception
			{
				echo $exception->getMessage();
			}
