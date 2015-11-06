#!/usr/bin/env python3
__author__='DGideas';

import DGStorage;

bipt_db_handle=DGStorage.DGStorage();
bipt_db_handle.create('/var/lib/bipt_user_table');
bipt_db_handle.create('/var/lib/bipt_person_table');
bipt_db_handle.create('/var/lib/bipt_log');

