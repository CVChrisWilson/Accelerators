﻿/* *********************************************************************************************
 *  This file is part of the Oracle Service Cloud Accelerator Reference Integration set published
 *  by Oracle Service Cloud under the MIT license (MIT) included in the original distribution.
 *  Copyright (c) 2014, 2015, Oracle and/or its affiliates. All rights reserved.
 ***********************************************************************************************
 *  Accelerator Package: OSVC + EBS Enhancement
 *  link: http://www.oracle.com/technetwork/indexes/samplecode/accelerator-osvc-2525361.html
 *  OSvC release: 15.8 (August 2015)
 *  EBS release: 12.1.3
 *  reference: 150505-000099, 150420-000127
 *  date: Thu Nov 12 00:52:49 PST 2015

 *  revision: rnw-15-11-fixes-release-1
 *  SHA1: $Id: f2d545bc18d1ad649fbdb2177e47810807f6a56f $
 * *********************************************************************************************
 *  File: Credential.cs
 * *********************************************************************************************/

using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace Accelerator.EBS.SharedServices.Providers
{
    public sealed class Credential
    {
        private String _password;

        private String _username;
        public String password
        {
            get { return _password; }
            set { _password = value; }
        }

        public String username
        {
            get { return _username; }
            set { _username = value; }
        } 
    }
}
