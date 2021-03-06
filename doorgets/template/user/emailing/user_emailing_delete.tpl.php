<?php if (!defined(DOORGETS)) { header('Location:../'); exit(); }

/*******************************************************************************
/*******************************************************************************
    doorGets 7.0 - 01, February 2016
    doorGets it's free PHP Open Source CMS PHP & MySQL
    Copyright (C) 2012 - 2015 By Mounir R'Quiba -> Crazy PHP Lover
    
/*******************************************************************************

    Website : http://www.doorgets.com
    Contact : http://www.doorgets.com/t/en/?contact
    
/*******************************************************************************
    -= One life, One code =-
/*******************************************************************************
    
    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
    
******************************************************************************
******************************************************************************/


?>
<div class="doorGets-rubrique-center">
    <div class="doorGets-rubrique-center-content">
        <div class="doorGets-rubrique-left-center-title page-header">

        </div>
        <legend>
            <span class="create" ><a class="doorGets-comebackform" href="[{!$this->doorGets->goBackUrl()!}]"><i class="fa fa-undo fa-lg green-c"></i> [{!$this->doorGets->__('Retour')!}]</a></span>
            <b class="glyphicon violet glyphicon-send "></b> [{!$this->doorGets->__('Supprimer un contact')!}] / [{!$isContent['nom']!}]
        </legend>
        [{!$this->doorGets->Form->open('post')!}]
        [{!$this->doorGets->Form->input('','id','hidden',$isContent['id'])!}]
        [{!$isContent['nom']!}] [{!$isContent['email']!}]
        <div class="separateur-tb"></div>
        <div class="text-center">
            [{!$this->doorGets->Form->submit($this->doorGets->__("Supprimer"),'','btn btn-danger btn-lg')!}]
        </div>
        [{!$this->doorGets->Form->close()!}]
    </div>
</div>