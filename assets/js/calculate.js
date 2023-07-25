
'date_field' 
'name'  
'nickname'  
'age'  
'dob'  
'pob'  
'gender'  
'cs'  
'nat'  
'order1'  
'brother'  
'sister'  
'current1'  
'permanent'  
'landline' 
'mobile' 
'email' 
'language_home'  
'language_fluent'  
'religion'  
'current'  
'father_name'  
'mother_name'  
'dob_father'  
'mother_dob' 
'pob_father'
'mother_pob'
'current_father'
'current_mother'
'permanent_father'
'permanent_mother'
'contact_father'
'contact_mother'
'father_education'
'mother_education'
'father_occupation'
'mother_occupation'
'language_father'
'language_mother'
'religion_father'
'religion_mother'
'religion1_father'
'religion1_mother'
'annual'
'other'
'parents'
's1'
's2'
's3'
's4'
's5'
's6'
's7'
's8'
'sp1'
'sp2'
'sp3'
'sp4'
'sp5'
'sp7'
'sp8'
'sp9'
'a1'
'a2'
'a3'
'a4'
'a5'
'a6'
'a7'
'a8'
'guardian'
'guardian_add'
'guardian_contact'
'guardian_relate'
'e_name'
'e_contact'
'e_add'
'sa1'
'sa2'
'sa3'
'sa4'
'ida1'
'ida2'
'ida3'
'ida4'
'sch1'
'sch2'
'sch3'
'sch4'
'easy'
'difficult'
'lowest'
'highest'
'org1'
'org2'
'org3'
'org4'
'org5'
'org6'
'po1'
'po2'
'po3'
'po4'
'po5'
'po6'
'fi'
'fo '
'interest'
'talent'
'hobby'
'ambition'
'motto'
'character1'
'concern'
'fear'
'problem'



form.getTextField('first_field').setText( '<?php echo  $item->course_first?>');
form.getTextField('second_field').setText(  '<?php echo  $item->course_second?>');
form.getTextField('date_field').setText( '<?php echo  $item->coursedate?>');
form.getTextField('applicant_field').setText( '<?php echo  $item->status?>');
form.getTextField('lastname_field').setText( '<?php echo  $item->last_name?>');
form.getTextField('firstname_field').setText( '<?php echo  $item->first_name?>');
form.getTextField('middlename_field').setText( '<?php echo  $item->middlename?>');
form.getTextField('school_field').setText('<?php echo   $item->schoolatt?>');
form.getTextField('schooladd_field').setText( '<?php echo  $item->last_school?>');
form.getTextField('ave_field').setText('<?php echo   $item->general_average?>');
form.getTextField('grad_date_field').setText('<?php echo   $item->date_graduation?>');
form.getTextField('age_field').setText( '<?php echo  $item->age?>');
form.getTextField('date_birth_field').setText( '<?php echo  $item->birth?>');
form.getTextField('place_birth_field').setText('<?php echo   $item->place_birth?>');
form.getTextField('gender_field').setText( '<?php echo  $item->gender?>');
form.getTextField('nationality_field').setText('<?php echo   $item->nationality?>');
form.getTextField('civil_field').setText( '<?php echo  $item->civil_status?>');
form.getTextField('religion_field').setText( '<?php echo  $item->religion?>');
form.getTextField('present_add_field').setText('<?php echo  $item->complete_present_add?>');
form.getTextField('contact_field').setText('<?php echo    $item->contact?>');
form.getTextField('mobile_field').setText('<?php echo   $item->mobile?>');
form.getTextField('person_field').setText('<?php echo   $item->person_contact?>');
form.getTextField('relationship_field').setText( '<?php echo  $item->relationship?>');
form.getTextField('person_contact_field').setText( '<?php echo  $item->relationship_contact?>');
form.getTextField('fathername').setText( '<?php echo  $item->father_name?>');
form.getTextField('mothername').setText('<?php echo   $item->mother_name?>');
form.getTextField('fatheraddress').setText('<?php echo   $item->father_address?>');
form.getTextField('motheraddress').setText( '<?php echo  $item->mother_address?>');
form.getTextField('fatherbirthdate').setText( '<?php echo  $item->father_birthdate?>');
form.getTextField('motherbirthdate').setText( '<?php echo  $item->mother_birthdate?>');
form.getTextField('fathernationality').setText( '<?php echo  $item->father_nationality?>');
form.getTextField('mothernationality').setText('<?php echo  $item->mother_nationality?>');
form.getTextField('fatherreligion').setText( '<?php echo  $item->father_religion?>');
form.getTextField('motherreligion').setText('<?php echo   $item->mother_religion?>');
form.getTextField('fathereducational').setText('<?php echo   $item->father_education?>');
form.getTextField('mothereducational').setText( '<?php echo  $item->mother_education?>');
form.getTextField('fatheroccupation').setText( '<?php echo  $item->father_occupation?>');
form.getTextField('motheroccupation').setText( '<?php echo  $item->mother_occupation?>');
form.getTextField('date_examination').setText( '<?php echo  $item->exam_date  . ' ' . $item->exam_time?>');
form.getTextField('fathercontact').setText('<?php echo   $item->father_contact?>');
form.getTextField('mothercontact').setText( '<?php echo  $item->mother_contact?>');

form.getTextField('id').setText('  $item->student_id');
form.getTextField('date_field').setText(' $item->date_field');
form.getTextField('name').setText(' $item->name');
form.getTextField('nickname').setText(' $item->nickname');
form.getTextField('age').setText(' $item->age');
form.getTextField('dob').setText(' $item->dob');
form.getTextField('pob').setText(' $item->pob');
form.getTextField('gender').setText(' $item->gender');
form.getTextField('cs').setText(' $item->cs');
form.getTextField('nat').setText('$item->nat');
form.getTextField('order').setText(' $item->order1');
form.getTextField('brother').setText(' $item->brother');
form.getTextField('sister').setText(' $item->sister');
form.getTextField('current').setText(' $item->current1');
form.getTextField('permanent').setText(' $item->permanent');
form.getTextField('landline').setText(' $item->landline');
form.getTextField('mobile').setText(' $item->mobile');
form.getTextField('email').setText(' $item->email');
form.getTextField('language_home').setText(' $item->language_home');
form.getTextField('language_fluent').setText(' $item->language_fluent');
form.getTextField('religion').setText(' $item->religion');
form.getTextField('current').setText(' $item->current');
form.getTextField('father_name').setText(' $item->father_name');
form.getTextField('mother_name').setText(' $item->mother_name');
form.getTextField('dob_father').setText(' $item->dob_father');
form.getTextField('mother_dob').setText(' $item->mother_dob');
form.getTextField('pob_father').setText(' $item->pob_father');
form.getTextField('mother_pob').setText(' $item->mother_pob');
form.getTextField('current_father').setText(' $item->current_father');
form.getTextField('current_mother' ).setText('$item->current_mother');
form.getTextField('permanent_father').setText(' $item->permanent_father');
form.getTextField('permanent_mother').setText(' $item->permanent_mother');
form.getTextField('contact_father' ).setText('$item->contact_father');
form.getTextField('contact_father').setText(' $item->contact_mother');
form.getTextField('father_education').setText(' $item->father_education');
form.getTextField('mother_education').setText(' $item->mother_education');
form.getTextField('father_occupation' ).setText('$item->father_occupation');
form.getTextField('mother_occupation' ).setText('$item->mother_occupation');
form.getTextField('language_father').setText(' $item->language_father');
form.getTextField('language_mother').setText(' $item->language_mother');
form.getTextField('religion_father').setText(' $item->religion_father');
form.getTextField('religion_mother' ).setText('$item->religion_mother');
form.getTextField('religion1_father').setText(' $item->religion1_father');
form.getTextField('religion1_mother').setText(' $item->religion1_mother');
form.getTextField('annual').setText(' $item->annual');
form.getTextField('other').setText(' $item->other');
form.getTextField('parents').setText(' $item->parents');
form.getTextField('s1').setText(' $item->s1');
form.getTextField('s2').setText(' $item->s2');
form.getTextField('s3').setText(' $item->s3');
form.getTextField('s4').setText(' $item->s4');
form.getTextField('s5').setText(' $item->s5');
form.getTextField('s6').setText(' $item->s6');
form.getTextField('s7').setText(' $item->s7');
form.getTextField('s8' ).setText('$item->s8');
form.getTextField('sp1').setText(' $item->sp1');
form.getTextField('sp2').setText(' $item->sp2');
form.getTextField('sp3' ).setText('$item->sp3');
form.getTextField('sp4').setText(' $item->sp4');
form.getTextField('sp5').setText(' $item->sp5');
form.getTextField('sp7').setText(' $item->sp7');
form.getTextField('sp8').setText(' $item->sp8');
form.getTextField('sp9').setText(' $item->sp9');
form.getTextField('a1').setText(' $item->a1');
form.getTextField('a2').setText(' $item->a2');
form.getTextField('a3').setText(' $item->a3');
form.getTextField('a4').setText(' $item->a4');
form.getTextField('a5').setText(' $item->a5');
form.getTextField('a6').setText(' $item->a6');
form.getTextField('a7').setText(' $item->a7');
form.getTextField('a8').setText(' $item->a8');
form.getTextField('guardian').setText(' $item->guardian');
form.getTextField('guardian_add').setText(' $item->guardian_add');
form.getTextField('guardian_contact').setText(' $item->guardian_contact');
form.getTextField('guardian_relate').setText(' $item->guardian_relate');
form.getTextField('e_name').setText(' $item->e_name');
form.getTextField('e_contact').setText(' $item->e_contact');
form.getTextField('e_add').setText(' $item->e_add');
form.getTextField('sa1').setText(' $item->sa1');
form.getTextField('sa2').setText(' $item->sa2');
form.getTextField('sa3').setText(' $item->sa3');
form.getTextField('sa4').setText(' $item->sa4');
form.getTextField('ida1').setText(' $item->ida1');
form.getTextField('ida2').setText(' $item->ida2');
form.getTextField('ida3').setText(' $item->ida3');
form.getTextField('ida4').setText(' $item->ida4');
form.getTextField('sch1').setText(' $item->sch1');
form.getTextField('sch2').setText(' $item->sch2');
form.getTextField('sch3').setText(' $item->sch3');
form.getTextField('sch4').setText(' $item->sch4');
form.getTextField('easy').setText(' $item->easy');
form.getTextField('difficult').setText(' $item->difficult');
form.getTextField('lowest').setText(' $item->lowest');
form.getTextField('highest').setText(' $item->highest');
form.getTextField('org1').setText(' $item->org1');
form.getTextField('org2').setText(' $item->org2');
form.getTextField('org3').setText(' $item->org3');
form.getTextField('org4').setText(' $item->org4');
form.getTextField('org5').setText(' $item->org5');
form.getTextField('org6').setText(' $item->org6');
form.getTextField('po1').setText(' $item->po1');
form.getTextField('po2').setText(' $item->po2');
form.getTextField('po3').setText(' $item->po3');
form.getTextField('po4').setText(' $item->po4');
form.getTextField('po5').setText(' $item->po5');
form.getTextField('po6').setText(' $item->po6');
form.getTextField('fi').setText(' $item->fi');
form.getTextField('fo').setText(' $item->fo');
form.getTextField('interest').setText(' $item->interest');
form.getTextField('talent').setText(' $item->talent');
form.getTextField('hobby').setText(' $item->hobby');
form.getTextField('ambition').setText(' $item->ambition');
form.getTextField('motto').setText(' $item->motto');
form.getTextField('character').setText(' $item->character1');
form.getTextField('concern').setText(' $item->concern');
form.getTextField('fear').setText(' $item->fear');
form.getTextField('problem').setText('$item->problem');

form.getTextField('name' ).setText('<?php echo $item->first_name .' '. $item->middlename .' '. $item->last_name');
form.getTextField('applied').setText('<?php echo  $item->course_first');
form.getTextField('dot').setText('<?php echo  $item->exam_date');
form.getTextField('r1').setText('<?php echo  $item->verbal');
form.getTextField('r2').setText('<?php echo  $item->numerical');
form.getTextField('r3').setText('<?php echo  $item->abstract');
form.getTextField('r4').setText('<?php echo  $item->language');
form.getTextField('r5').setText('<?php echo  $item->spelling');
form.getTextField('pr1').setText('<?php echo  $item->p1');
form.getTextField('pr2').setText('<?php echo  $item->p2');
form.getTextField('pr3').setText('<?php echo  $item->p3');
form.getTextField('pr4').setText('<?php echo  $item->p4');
form.getTextField('pr5').setText('<?php echo  $item->p5');
form.getTextField('st1').setText('<?php echo   $item->s1');
form.getTextField('st2').setText('<?php echo  $item->s2');
form.getTextField('st3').setText('<?php echo  $item->s3');
form.getTextField('st4').setText('<?php echo  $item->s4');
form.getTextField('st5').setText('<?php echo  $item->s5');
form.getTextField('st6').setText('<?php echo  $item->total');
form.getTextField('cl1').setText('<?php echo  $classy');
form.getTextField('cl2').setText('<?php echo  $classy2');
form.getTextField('cl3').setText('<?php echo  $classy3');
form.getTextField('cl4').setText('<?php echo  $classy4');
form.getTextField('cl5').setText('<?php echo  $classy5');
form.getTextField('remark' ).setText('<?php echo  $item->exam_result');
