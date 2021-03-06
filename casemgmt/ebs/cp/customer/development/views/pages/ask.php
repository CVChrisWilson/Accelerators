<!--
/* * *******************************************************************************************
 *  This file is part of the Oracle Service Cloud Accelerator Reference Integration set published
 *  by Oracle Service Cloud under the MIT license (MIT) included in the original distribution.
 *  Copyright (c) 2014, 2015, Oracle and/or its affiliates. All rights reserved.
 ***********************************************************************************************
 *  Accelerator Package: OSVC + EBS Enhancement
 *  link: http://www.oracle.com/technetwork/indexes/samplecode/accelerator-osvc-2525361.html
 *  OSvC release: 15.8 (August 2015)
 *  EBS release: 12.1.3
 *  reference: 150505-000099, 150420-000127
 *  date: Thu Nov 12 00:52:36 PST 2015

 *  revision: rnw-15-11-fixes-release-1
 *  SHA1: $Id: dbe0b578af07d83d67bd30a2610558c302f8c2bd $
 * *********************************************************************************************
 *  File: ask.php
 * ****************************************************************************************** */
-->
<rn:meta title="#rn:msg:ASK_QUESTION_HDG#" template="standard.php" clickstream="incident_create"/>

<div class="rn_Hero">
    <div class="rn_HeroInner">
        <div class="rn_HeroCopy">
            <h1>#rn:msg:SUBMIT_QUESTION_OUR_SUPPORT_TEAM_CMD#</h1>
            <p>#rn:msg:OUR_DEDICATED_RESPOND_WITHIN_48_HOURS_MSG#</p>
        </div>
        <div class="translucent">
            <strong>#rn:msg:TIPS_LBL#:</strong>
            <ul>
                <li><i class="fa fa-thumbs-up"></i> #rn:msg:INCLUDE_AS_MANY_DETAILS_AS_POSSIBLE_LBL#</li>
            </ul>
        </div>
        <br>
        <p>#rn:msg:NEED_A_QUICKER_RESPONSE_LBL# <a href="/app/social/ask">#rn:msg:ASK_OUR_COMMUNITY_LBL#</a></p>
    </div>
</div>

<div class="rn_PageContent rn_AskQuestion rn_Container">
    <form id="rn_QuestionSubmit" method="post" action="/ci/ajaxRequest/sendForm">
        <div id="rn_ErrorLocation"></div>

        <rn:condition logged_in="true">
            <rn:widget path="input/FormInput" name="Incident.Subject" required="true" initial_focus="true" label_input="#rn:msg:SUBJECT_LBL#"/>
            <rn:widget path="input/FormInput" name="Incident.CustomFields.Accelerator.ebs_sr_request_type" required="true" label_input="Request Type"/>
            <rn:widget path="input/ProductCategoryInput" name="Incident.Product"/>
            <rn:widget path="custom/EbsServiceRequest/SerialNumberInput" name="Incident.CustomFields.Accelerator.ebs_serial_number" label_input="Serial Number" maximum_length="30"/>
            <rn:widget path="input/FormInput" name="Incident.Threads" required="true" label_input="#rn:msg:QUESTION_LBL#" maximum_length="1000"/>
            <rn:widget path="input/FormSubmit"  on_success_url="/app/ask_confirm" error_location="rn_ErrorLocation" timeout="180000"/>

            <rn:condition answers_viewed="2" searches_done="1">
                <rn:condition_else/>
                <rn:widget path="input/SmartAssistantDialog"/>
            </rn:condition>
        </rn:condition>

    </form>
</div>
