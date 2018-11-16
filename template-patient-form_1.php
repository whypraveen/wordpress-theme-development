<?php

/**
 * Template Name: Patient Form
 */
?>

<?php while (have_posts()) : the_post(); ?>
    <?php //get_template_part('templates/page', 'header'); ?>
    
    <section> 
        <div class="container-fluid pad0 patient-form">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <?php get_template_part('templates/content', 'page');  ?>
                    </div>
                    <div class="col-xs-12">
                        <h2>New Patient Questionnaire</h2>
                        <form action="" method="post" class="form-inline">
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
    <div class="form-group">
        <label class="custom-lebel">First Name*</label>
        [text* fname class:form-control]
    </div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
    <div class="form-group">
        <label class="custom-lebel read-only">Last Name*</label>
        [text* lname class:form-control]
    </div>
</div>
<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
    <div class="form-group">
        <label class="custom-lebel read-only">M.I.</label>
        [text mi class:form-control]
    </div>  
</div>
<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
    <div class="form-group">
        <label class="custom-lebel read-only">Date</label>
        [text* fname class:form-control placeholder "mm/dd/yy"]
    </div>  
</div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    <div class="form-group">
        <label class="custom-lebel col-xs-12 pad0">Who referred you to our office?</label>
        <div class="checkbox col-xs-6 pad0">
            <label>[checkbox refer-physician-friend data-toggle:collapse data-target:#demo "Physician/Friend"]</label>
        </div>
        <div class="checkbox col-xs-6 pad0">
            <label>[checkbox internet "Internet"]</label>
        </div>
        [text refer class:collapse id:demo]
    </div>
</div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    <div class="form-group">
        <label class="custom-lebel"><strong>Chief Complaint</strong></label>
        [textarea* chief-complaint class:form-control 40x2 placeholder "What is the Medical Problem leading to today's visit?"]
    </div>
</div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="">
                        <form action="" method="post" class="form-inline">
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    <p><b>History of Present Illness or Condition</b></p>
    <div class="col-xs-12">
        <div class="form-group">
            <label class="custom-lebel">Where on your body is the problem? </label>
            [text* bodyproblem class:form-control]
        </div>
    </div>
    <div class="col-xs-12">
        <div class="form-group">
            <label class="custom-lebel">How would you describe the condition?</label>
            [text* condition class:form-control]
        </div>
    </div>
    <div class="col-xs-12">
        <div class="form-group">
            <label class="custom-lebel">How would you describe the severity of your condition?</label>
            [text* severity class:form-control]
        </div>
    </div>
    <div class="col-xs-12 ">
        <div class="form-group">
            <label class="custom-lebel">How long has this condition existed?</label>
            [text condition-existed class:form-control]
        </div>
    </div>
    <div class="col-xs-12 ">
        <div class="form-group">
            <label class="custom-lebel">Is your condition constant or only present during certain situations?</label>
            [text condition-situations class:form-control]
        </div>
    </div>
    <div class="col-xs-12">
        <div class="form-group">
            <label class="custom-lebel">How does this condition affect your normal activities?</label>
            [text condition-effect class:form-control]
        </div>
    </div>
    <div class="col-xs-12">
        <div class="form-group">
            <label class="custom-lebel">What makes your condition worse or better?</label>
            [text condition-makes class:form-control]
        </div>
    </div>
    <div class="col-xs-12">
        <div class="form-group">
            <label class="custom-lebel">Are any other conditions associated with your main condition?</label>
            [text other-condition class:form-control]
        </div>
    </div>
    <div class="col-xs-12">
        <div class="form-group">
            <label class="custom-lebel">Have you been treated for this condition?</label>
            [text* condition-treated class:form-control placeholder "Yes/No if Yes please describe"]
        </div>
    </div>
</div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    <p><b>Review of Systems</b></p>
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="form-group ">
                <label class="custom-lebel col-xs-12">Constitutional</label>
                <div class="checkbox col-xs-12">
                    <label>[checkbox fever "Fever"]</label>
                </div>
                <div class="checkbox col-xs-12">
                    <label>[checkbox Chills "Chills"]</label>
                </div>
                <div class="checkbox col-xs-12">
                    <label>[checkbox WeightLoss "Weight Loss"]</label>
                </div>
                <div class="checkbox col-xs-12">
                    <label>[checkbox WeightGain "Weight Gain"]</label>
                </div>
                <div class="checkbox col-xs-12">
                    <label>[checkbox Weakness "Weakness"]</label>
                </div>
                <div class="checkbox col-xs-12">
                    <label>[checkbox Fatigue "Fatigue"]</label>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="form-group ">
                <label class="custom-lebel col-xs-12">Musculoskeletal</label>
                <div class="checkbox col-xs-12">
                    <label>[checkbox Arthritis "Arthritis"]</label>
                </div>
                <div class="checkbox col-xs-12">
                    <label>[checkbox DecreaseMuscleTone "Decrease Muscle Tone"]</label>
                </div>
                <div class="checkbox col-xs-12">
                    <label>[checkbox BonePain "Bone Pain"]</label>
                </div>
                <div class="checkbox col-xs-12">
                    <label>[checkbox BrokenBones "Broken Bones"]</label>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="form-group ">
                <label class="custom-lebel col-xs-12">Eyes</label>
                <div class="checkbox col-xs-12">
                    <label>[checkbox BlurredVision "Blurred Vision"]</label>
                </div>
                <div class="checkbox col-xs-12">
                    <label>[checkbox DoubleVision "Double Vision"]</label>
                </div>
                <div class="checkbox col-xs-12">
                    <label>[checkbox EyePain "Eye Pain"]</label>
                </div>
                <div class="checkbox col-xs-12">
                    <label>[checkbox Blindness "Blindness"]</label>
                </div>
                <div class="checkbox col-xs-12">
                    <label>[checkbox Colorblindness "Colorblindness"]</label>
                </div>
                <div class="checkbox col-xs-12">
                    <label>[checkbox Glasses "Glasses"]</label>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="form-group ">
                <label class="custom-lebel col-xs-12">Skin and Breast</label>
                <div class="checkbox col-xs-12">
                    <label>[checkbox Rashes "Rashes"]</label>
                </div>
                <div class="checkbox col-xs-12">
                    <label>[checkbox Moles "Moles"]</label>
                </div>
                <div class="checkbox col-xs-12">
                    <label>[checkbox Blisters "Blisters"]</label>
                </div>
                <div class="checkbox col-xs-12">
                    <label>[checkbox BreastTendernessOrLumps "Breast Tenderness or Lumps"]</label>
                </div>
                <div class="checkbox col-xs-12">
                    <label>[checkbox NippleDischarge "Nipple discharge"]</label>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="form-group ">
                <label class="custom-lebel col-xs-12">Ears/Nose/Throat</label>
                <div class="checkbox col-xs-12">
                    <label>[checkbox Deafness "Deafness"]</label>
                </div>
                <div class="checkbox col-xs-12">
                    <label>[checkbox NasalCongestion "Nasal Congestion"]</label>
                </div>
                <div class="checkbox col-xs-12">
                    <label>[checkbox SoreThroat "Sore Throat"]</label>
                </div>
                <div class="checkbox col-xs-12">
                    <label>[checkbox Hoarseness "Hoarseness"]</label>
                </div>
                <div class="checkbox col-xs-12">
                    <label>[checkbox DifficultySwallowing "Difficulty Swallowing"]</label>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="form-group ">
                <label class="custom-lebel col-xs-12">Neurological</label>
                <div class="checkbox col-xs-12">
                    <label>[checkbox Dizziness "Dizziness"]</label>
                </div>
                <div class="checkbox col-xs-12">
                    <label>[checkbox WeaknessOfArmsOrLegs "Weakness of arms or legs"]</label>
                </div>
                <div class="checkbox col-xs-12">
                    <label>[checkbox LossOfSensationOfHandsFeet "Loss of Sensation of hands, feet"]</label>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="form-group ">
                <label class="custom-lebel col-xs-12">Cardiovascular</label>
                <div class="checkbox col-xs-12">
                    <label>[checkbox ChestPain "Chest Pain"]</label>
                </div>
                <div class="checkbox col-xs-12">
                    <label>[checkbox HeartPalpitations "Heart Palpitations"]</label>
                </div>
                <div class="checkbox col-xs-12">
                    <label>[checkbox AbnormalHeartRhythm "Abnormal Heart Rhythm"]</label>
                </div>
                <div class="checkbox col-xs-12">
                    <label>[checkbox SwellingOfAnkles "Swelling of ankles"]</label>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="form-group ">
                <label class="custom-lebel col-xs-12">Psychiatric</label>
                <div class="checkbox col-xs-12">
                    <label>[checkbox Depression "Depression"]</label>
                </div>
                <div class="checkbox col-xs-12">
                    <label>[checkbox Anxiety "Anxiety"]</label>
                </div>
                <div class="checkbox col-xs-12">
                    <label>[checkbox Insomnia "Insomnia"]</label>
                </div>
                <div class="checkbox col-xs-12">
                    <label>[checkbox PanicAttacks "Panic Attacks"]</label>
                </div>
                <div class="checkbox col-xs-12">
                    <label>[checkbox ThoughtDisorders "Thought Disorders"]</label>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="form-group ">
                <label class="custom-lebel col-xs-12">Gastrointestinal</label>
                <div class="checkbox col-xs-12">
                    <label>[checkbox Constipation "Constipation"]</label>
                </div>
                <div class="checkbox col-xs-12">
                    <label>[checkbox Diarrhea "Diarrhea"]</label>
                </div>
                <div class="checkbox col-xs-12">
                    <label>[checkbox AbdominalPain "Abdominal Pain"]</label>
                </div>
                <div class="checkbox col-xs-12">
                    <label>[checkbox Nausea "Nausea"]</label>
                </div>
                <div class="checkbox col-xs-12">
                    <label>[checkbox Vomiting "Vomiting"]</label>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="form-group ">
                <label class="custom-lebel col-xs-12">Endocrine</label>
                <div class="checkbox col-xs-12">
                    <label>[checkbox ExcessiveThirst "Excessive Thirst"]</label>
                </div>
                <div class="checkbox col-xs-12">
                    <label>[checkbox ExcessiveUrination "Excessive Urination"]</label>
                </div>
                <div class="checkbox col-xs-12">
                    <label>[checkbox HeatOrColdTolerance "Heat or Cold Tolerance"]</label>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="form-group ">
                <label class="custom-lebel col-xs-12">Respiratory</label>
                <div class="checkbox col-xs-12">
                    <label>[checkbox ShortnessOfBreath "Shortness of Breath"]</label>
                </div>
                <div class="checkbox col-xs-12">
                    <label>[checkbox Wheezing "Wheezing"]</label>
                </div>
                <div class="checkbox col-xs-12">
                    <label>[checkbox BloodInSputum "Blood in Sputum"]</label>
                </div>
                <div class="checkbox col-xs-12">
                    <label>[checkbox ChronicCough "Chronic Cough"]</label>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="form-group ">
                <label class="custom-lebel col-xs-12">Blood/Lymph System</label>
                <div class="checkbox col-xs-12">
                    <label>[checkbox Bleeding "Bleeding"]</label>
                </div>
                <div class="checkbox col-xs-12">
                    <label>[checkbox Bruising "Bruising"]</label>
                </div>
                <div class="checkbox col-xs-12">
                    <label>[checkbox SwollenLymphGlands "Swollen Lymph Glands"]</label>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="form-group ">
                <label class="custom-lebel col-xs-12">Allergy/Immune</label>
                <div class="checkbox col-xs-12">
                    <label>[checkbox Itchiness "Itchiness"]</label>
                </div>
                <div class="checkbox col-xs-12">
                    <label>[checkbox Runny Nose "Runny Nose"]</label>
                </div>
                <div class="checkbox col-xs-12">
                    <label>[checkbox Rhinitis "Rhinitis"]</label>
                </div>
                <div class="checkbox col-xs-12">
                    <label>[checkbox Infections "Infections"]</label>
                </div>
            </div>
        </div>
    </div>
</div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="">
                        <form action="" method="post" class="form-inline">
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    <div class="col-xs-12">
        <div class="form-group ">
            <label class="custom-lebel col-xs-12">Kidney Disorders</label>
            <div class="checkbox col-xs-12">
                <label>[checkbox KidneyStones "Kidney Stones"</label>
            </div>
            <div class="checkbox col-xs-12">
                <label>[checkbox KidneyInfection "Kidney Infection"]</label>
            </div>
            <div class="checkbox col-xs-12">
                <label>[checkbox RenalFailure "Renal Failure"]</label>
            </div>
            <div class="checkbox col-xs-12">
                <label>[checkbox FlankPain "Flank Pain"]</label>
            </div>
            <div class="checkbox col-xs-12">
                <label>[checkbox KidneyObstruction "Kidney Obstruction"]</label>
            </div>
        </div>
    </div>
    <div class="col-xs-12">
        <div class="form-group ">
            <label class="custom-lebel col-xs-12">Bladder Problems</label>
            <div class="checkbox col-xs-12">
                <label>[checkbox Cystitis "Cystitis"]</label>
            </div>
            <div class="checkbox col-xs-12">
                <label>[checkbox UTIs "UTIs"]</label>
            </div>
            <div class="checkbox col-xs-12">
                <label>[checkbox BloodinUrine "Blood in Urine"]</label>
            </div>
            <div class="checkbox col-xs-12">
                <label>[checkbox Pelvic Pain "Pelvic Pain"]</label>
            </div>
            <div class="checkbox col-xs-12">
                <label>[checkbox UrinaryUrgency "Urinary Urgency"]</label>
            </div>
            <div class="checkbox col-xs-12">
                <label>[checkbox FrequencyOfUrination "Frequency of urination"]</label>
            </div>
            <div class="checkbox col-xs-12">
                <label>[checkbox BurningWithUrination "Burning with urination"]</label>
            </div>
            <div class="checkbox col-xs-12">
                <label>[checkbox RetentionOfUrine "Retention of Urine"] </label>
            </div>
            <div class="checkbox col-xs-12">
                <label>[checkbox DoubleVoiding "Double voiding"] </label>
            </div>
            <div class="checkbox col-xs-12">
                <label>[checkbox WakingNight "Waking to urinate at night"]</label>
            </div>
            <div class="checkbox col-xs-12">
                <label>[checkbox InterruptedStream "Interrupted stream"]</label>
            </div>
            <br/>
            <label class="custom-lebel col-xs-12">Urinary Incontinence (leakage):</label>
            <div class="checkbox col-xs-12">
                <label>[checkbox coughLaughStraining "with cough, laugh, straining"]</label>
            </div>
            <div class="checkbox col-xs-12">
                <label>[checkbox postponeUrination "because of inability to postpone urination"]</label>
            </div>
            <div class="checkbox col-xs-12">
                <label>[checkbox leakage "leakage without awareness"]</label>
            </div>
            <div class="checkbox col-xs-12">
                <label>[checkbox urineLeakage "need to wear pads for protection from urine leakage"]</label>
            </div>
        </div>
    </div>
    <div class="col-xs-12 pad0">
        <div class="col-xs-12">
            <p>Obstetrical History</p>
            <div class="form-group">
                <label class="control-lebel">Total number of prior pregnancies</label>
                [text priorPregnancies class:form-control]
            </div>
        </div>
        <div class="col-xs-6">
            <div class="form-group">
                <label class="control-lebel">Live Birth</label>
                [text liveBirth class:form-control]
            </div>
        </div>
        <div class="col-xs-6">
            <div class="form-group">
                <label class="control-lebel">Vaginal Deliveries</label>
                [text vaginalDeliveries class:form-control]
            </div>
        </div>
        <div class="col-xs-6">
            <div class="form-group">
                <label class="control-lebel">C-Sections</label>
                [text CSection class:form-control]
            </div>
        </div>
        <div class="col-xs-6">
            <div class="form-group">
                <label class="control-lebel">Terminations/Miscarriages</label>
                [text Miscarriages class:form-control]
            </div>
        </div>
    </div>
    <div class="col-xs-12 pad0">
        <div class="col-xs-12">
            <div class="form-group">
                <label class="control-lebel">Family History</label>
                <p class=""><small>Please list any major Hereditary or Major Illness in your family</small></p>
                [text familyIllness class:form-control]
            </div>
        </div>
        <p class="col-xs-12"><strong><small>Cause of death of any immediate family members</small></strong></p>
        <div class="col-xs-6">
            <div class="form-group">
                <label class="control-lebel">Family Member</label>
                [text family1 class:form-control]
            </div>
            <div class="form-group">
                [text family2 class:form-control]
            </div>
            <div class="form-group">
                [text family3 class:form-control]
            </div>
        </div>
        <div class="col-xs-6">
            <div class="form-group">
                <label class="control-lebel">Cause of Death</label>
                [text familyDeath class:form-control]
            </div>
            <div class="form-group">
                [text familyDeath1 class:form-control]
            </div>
            <div class="form-group">
                [text familyDeath2 class:form-control]
            </div>
        </div>
    </div>
    <div class="col-xs-12 pad0">
        <p class="col-xs-12"><strong><small>Social History</small></strong></p>
        <div class="form-group ">
            <label class="custom-lebel col-xs-12">Marital Status</label>
            <div class="checkbox col-xs-12 col-sm-6">
                <label>[checkbox maritalStatus "Single"]</label>
            </div>
            <div class="checkbox col-xs-12 col-sm-6">
                <label>[checkbox maritalStatus "Married"]</label>
            </div>
            <div class="checkbox col-xs-12 col-sm-6">
                <label>[checkbox maritalStatus "Separated"]</label>
            </div>
            <div class="checkbox col-xs-12 col-sm-6">
                <label>[checkbox maritalStatus "Divorced"]</label>
            </div>
            <div class="checkbox col-xs-12 col-sm-6 ">
                <label>[checkbox maritalStatus "Widowed"]</label>
            </div>
            <div class="checkbox col-xs-12 col-sm-6">
                <label>[checkbox maritalStatus "Domestic Partnership"]</label>
            </div>

            <label class="custom-lebel col-xs-12">Smoking History</label>
            <div class="checkbox col-xs-12 col-sm-4">
                <label>[checkbox smokingHistory "Never Smoked"]</label>
            </div>
            <div class="checkbox col-xs-12 col-sm-4">
                <label>[checkbox smokingHistory "Former Smoker"]</label>
            </div>
            <div class="checkbox col-xs-12 col-sm-4">
                <label>[checkbox smokingHistory "Smoker"]</label>
            </div>
            <div class="checkbox col-xs-12">
                <label>[checkbox smokingHistory "History of Alcohol/Drug Abuse or Addiction"]</label>
            </div>
        </div>
    </div>
</div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    <div class="col-xs-12">
        <div class="form-group ">
            <label class="custom-lebel col-xs-12">Menstrual History</label>
            <div class="checkbox col-xs-12 col-sm-6">
                <label>[checkbox MenstrualHistory "Normal Periods"]</label>
            </div>
            <div class="checkbox col-xs-12 col-sm-6">
                <label>[checkbox MenstrualHistory "Irregular Periods"]</label>
            </div>
            <div class="checkbox col-xs-12 col-sm-6">
                <label>[checkbox MenstrualHistory "Peri-Menopausal"]</label>
            </div>
            <div class="checkbox col-xs-12 col-sm-6">
                <label>[checkbox MenstrualHistory "Menopausal"]</label>
            </div>
        </div>
    </div>
    <div class="col-xs-12">
        <div class="form-group">
            <label class="control-lebel">Current Birth Control measures, if any</label>
            [text birthControl class:form-control]
        </div>
    </div>
    <div class="col-xs-6">
        <div class="form-group">
            <label class="control-lebel">Age at Menstruation</label>
            [text ageMenstruation class:form-control]
        </div>
    </div>
    <div class="col-xs-6">
        <div class="form-group">
            <label class="control-lebel">Age at Menopause</label>
            [text AgeMenopause class:form-control]
        </div>
    </div>
    <div class="col-xs-12">
        <div class="form-group ">
            <label class="custom-lebel col-xs-12">Vaginal/Uterine Problems</label>
            <div class="checkbox col-xs-12">
                <label>[checkbox UterineProblems "Prolapse or bulging sensation in vagina"]</label>
            </div>
            <label class="control-lebel col-xs-12">Vaginal</label>
            <div class="checkbox col-xs-3">
                <label>[checkbox Vaginaldryness "dryness"]</label>
            </div>
            <div class="checkbox col-xs-3">
                <label>[checkbox VaginalItchiness "itchiness"]</label>
            </div>
            <div class="checkbox col-xs-3">
                <label>[checkbox VaginalDischarge "discharge"]</label>
            </div>
            <div class="checkbox col-xs-3">
                <label>[checkbox VaginalBleeding "bleeding"]</label>
            </div>
        </div>
    </div>
    <div class="col-xs-12">
        <div class="form-group ">
            <label class="custom-lebel col-xs-12">Sexual History</label>
            <div class="checkbox col-xs-12">
                <label>[checkbox SexualHistory "Sexually active with normal, satisfying erections, orgasm and ejaculation"]</label>
            </div>
            <div class="checkbox col-xs-12">
                <label>[checkbox SexualHistory "Diminished lubrication during sexual stimulation"]</label>
            </div>
            <div class="checkbox col-xs-12">
                <label>[checkbox SexualHistory "Difficulty achieving/maintining erections during sex"]</label>
            </div>
            <div class="checkbox col-xs-12">
                <label>[checkbox SexualHistory "Difficulty acheiving orgasm"]</label>
            </div>

            <label class="custom-lebel col-xs-12">Sex drive</label>
            <div class="checkbox col-xs-12 col-sm-4">
                <label>[checkbox SexDrive "Normal"]</label>
            </div>
            <div class="checkbox col-xs-12 col-sm-4">
                <label>[checkbox SexDrive "Decreased"]</label>
            </div>
            <div class="checkbox col-xs-12 col-sm-4">
                <label>[checkbox SexDrive "No interest"}</label>
            </div>
            <label class="custom-lebel col-xs-12">Sexual Orientation</label>
            <div class="checkbox col-xs-12 col-sm-4">
                <label>[checkbox SexualOrientation "Heterosexual"]</label>
            </div>
            <div class="checkbox col-xs-12 col-sm-4">
                <label>[checkbox SexualOrientation "Homosexual"]</label>
            </div>
            <div class="checkbox col-xs-12 col-sm-4">
                <label>[checkbox SexualOrientation "Bi-sexual"]</label>
            </div>
            <label class="custom-lebel col-xs-12 ">History of Sexually Transmitted Disease?</label>
            <div class="checkbox col-xs-12 col-sm-6">
                <label>[checkbox SexuallyTransmittedDisease "Yes"]</label>
            </div>
            <div class="checkbox col-xs-12 col-sm-6">
                <label>[checkbox SexuallyTransmittedDisease "No"]</label>
            </div>
        </div>
    </div>
    <div class="col-xs-12 pad0">
        <div class="col-xs-12">
            <div class="form-group">
                <label class="control-lebel">Medical History</label>
                <p class=""><small>Major Medical Conditions/Operations/Injuries</small></p>
                [textarea medicalHistory 40x5 class:form-control]
            </div>
        </div>
        <div class="col-xs-12"> 
            <div class="form-group">
                <label class="control-lebel">Occupation</label>
                [text occupation class: form-control]
            </div>
        </div>
        <div class="col-xs-12">
            <div class="form-group">
                <label class="control-lebel">Fitness/Exercise Regimen</label>
                [textarea FitnessRegimen 40x5 class:form-control]
            </div>
        </div>
    </div>
</div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <form action="" method="post" class="form-inline">
                            <p class="col-xs-12"><strong><small>Current Medications</small></strong></p>
                            <div class="col-xs-12 col-sm-3">
                                <div class="form-group">
                                    <label class="control-lebel">Medication</label>
                                    [textarea Medication 40x5 class:form-control]
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3">
                                <div class="form-group">
                                    <label class="control-lebel">Dose</label>
                                    [textarea dose 40x5 class:form-control]
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3">
                                <div class="form-group">
                                    <label class="control-lebel">Frequency</label>
                                    [textarea Frequency 40x5 class:form-control]
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3">
                                <div class="form-group">
                                    <label class="control-lebel">Prescribing M.D.</label>
                                    [textarea Prescribing 40x5 class:form-control]
                                </div>
                            </div>
                            <p class="col-xs-12"><strong><small>Allergies</small></strong></p>
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <label class="control-lebel">Drug/Medication</label>
                                    [textarea AllergiesDrug 40x5 class:form-control]
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <label class="control-lebel">Reaction (Rash, Shortness of Breath, Nausea, etc.)</label>
                                   [textarea Reaction 40x5 class:form-control] 
                                </div>
                            </div>
                            <p class="col-xs-12"><strong><small>Form Completed by</small></strong></p>
                            <div class="checkbox col-xs-12 col-sm-3">
                                <label>[checkbox FormCompledtedBy "Patient"]</label>
                            </div>
                            <div class="checkbox col-xs-12 col-sm-3">
                                <label>[checkbox FormCompledtedBy "Parent"]</label>
                            </div>
                            <div class="checkbox col-xs-12 col-sm-3">
                                <label>[checkbox FormCompledtedBy "Guardian"]</label>
                            </div>
                            <div class="checkbox col-xs-12 col-sm-3">
                                <label>[checkbox FormCompledtedBy "Power Of Attorney"]</label>
                            </div>
                            <div class="checkbox col-xs-12 col-sm-3">
                                <label>[checkbox FormCompledtedBy "Caregiver"]</label>
                            </div>
                            <p class="col-xs-12"><strong><small>Patient Unable to Complete Due to </small></strong></p>
                            <div class="checkbox col-xs-12 col-sm-6">
                                <label>[checkbox PatientUnable "Language Barrier"]</label>
                            </div>
                            <div class="checkbox col-xs-12 col-sm-6">
                                <label>[checkbox PatientUnable "Mental or Health Status"]</label>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <label class="control-lebel">Reviewed by</label>
                                    [text reviewedBy class:form-control]
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <h2>Patient Registration</h2>
                        <form action="" method="post" class="form-inline">
                            <div class="col-xs-12 pad0">
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-5">
                                    <div class="form-group">
                                        <label class="custom-lebel">First Name*</label>
                                        [text* patientfname class:form-control]
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-5">
                                    <div class="form-group">
                                        <label class="custom-lebel read-only">Last Name*</label>
                                        [text* patientlname class:form-control]
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                                    <div class="form-group">
                                        <label class="custom-lebel read-only">M.I.</label>
                                        [text patientmi class:form-control]
                                    </div>  
                                </div>
                            </div>
                            <div class="col-xs-12 pad0">
                                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                                    <div class="form-group">
                                        <label class="custom-lebel"><strong>Address</strong></label>
                                        [textarea* patientAddress 40x4 class:form-control] 
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label class="custom-lebel read-only">Apt#</label>
                                        [text patientApt class:form-control]
                                    </div>  
                                </div>
                            </div>
                            <div class="col-xs-12 pad0">
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label class="custom-lebel read-only">City</label>
                                        [text* patientCity class:form-control]
                                    </div>  
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label class="custom-lebel read-only">State</label>
                                        [text* patientState class:form-control]
                                    </div>  
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label class="custom-lebel read-only">Zip</label>
                                        [text* patientZip class:form-control]
                                    </div>  
                                </div>
                            </div>
                            <div class="col-xs-12 pad0">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label class="custom-lebel read-only">Home Telephone</label>
                                        [text* patientPhone class:form-control]
                                    </div>  
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label class="custom-lebel read-only"> Work Telephone </label>
                                        [text* patientWorkPhone class:form-control]
                                    </div>  
                                </div>
                            </div>
                            <div class="col-xs-12 pad0">
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label class="custom-lebel read-only">Date of Birth</label>
                                        [text* patientDob class:form-control placeholder "mm/dd/yy"]
                                    </div>  
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label class="custom-lebel read-only">Age</label>
                                        [text* patientAge class:form-control]
                                    </div>  
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label class="custom-lebel col-xs-12 pad0">Sex</label>
                                        <div class="checkbox ">
                                            <label>[checkbox PatientSex "Male"]</label>
                                        </div>
                                        <div class="checkbox">
                                            <label>[checkbox PatientSex "Female"]</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 pad0">
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label class="custom-lebel read-only">Social Security #</label>
                                        [text SocialSecurity class:form-control]
                                    </div>  
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label class="custom-lebel read-only">Driver's License #</label>
                                        [text patientDrivLicense class:form-control]
                                    </div>  
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label class="custom-lebel read-only">State</label>
                                        [text patientDriveState class:form-control]
                                    </div>  
                                </div>
                            </div>
                            <hr/ style="clear:both;">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label class="custom-lebel col-xs-12 pad0">Marital Status</label>
                                    <div class="checkbox col-md-2 pad0">
                                        <label>[checkbox PatientMaritalStatus "Single"]</label>
                                    </div>
                                    <div class="checkbox col-md-2 pad0">
                                        <label>[checkbox PatientMaritalStatus "Married"]</label>
                                    </div>
                                    <div class="checkbox col-md-2 pad0">
                                        <label>[checkbox PatientMaritalStatus "Separated"}</label>
                                    </div>
                                    <div class="checkbox col-md-2 pad0">
                                        <label>[checkbox PatientMaritalStatus "Divorced"]</label>
                                    </div>
                                    <div class="checkbox col-md-2 pad0">
                                        <label>[checkbox PatientMaritalStatus "Widowed"]</label>
                                    </div>
                                    <div class="checkbox col-md-2 pad0">
                                        <label>[checkbox PatientMaritalStatus "Domestic Partnership"]</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label class="custom-lebel">Spouse/Partner's Name </label>
                                    [text spouseName class:form-control]
                                </div>  
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label class="custom-lebel read-only">Daytime Phone</label>
                                    [text dayTimePhone class:form-control]
                                </div>  
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label class="custom-lebel read-only">Your Employer</label>
                                    [text yourEmployer class:form-control]
                                </div>  
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label class="custom-lebel read-only">Occupation</label>
                                    [text pOccupation class:form-control]
                                </div>  
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label class="custom-lebel read-only">Address</label>
                                    [text OAddress class:form-control]
                                </div>  
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label class="custom-lebel read-only">Daytime Phone</label>
                                    [text dayTimePhone class:form-control]
                                </div>  
                            </div>
                            <hr style="clear:both;">
                                <div class="col-xs-12 ">
                                <div class="form-group">
                                    <label class="custom-lebel read-only">Responsible Party (if other than yourself)</label>
                                    [text responsibleParty class:form-control]
                                </div>  
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label class="custom-lebel read-only">Resp. Party's Home Phone</label>
                                    [text respPartyPhone class:form-control]
                                </div>  
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label class="custom-lebel read-only">Daytime Phone</label>
                                    [text respPartyDayTimePhone class:form-control]
                                </div>  
                            </div>
                            <p class="col-xs-12"><strong><small>Names of other Physicians who care for you (please list below)</small></strong></p>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label class="custom-lebel read-only">Name</label>
                                    [text carePhysicians class:form-control]
                                </div>  
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label class="custom-lebel read-only">Phone</label>
                                    [text carePhysiciansPhone class:form-control]
                                </div>  
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <h2>Insurance Information</h2>
                        <form action="" method="post" class="form-inline">
                            <p class="col-xs-12"><strong>A. Primary Insurance </strong></p>
                            <div class="col-xs-12 pad0">
                                <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
                                    <div class="form-group">
                                        <label class="custom-lebel">Company Name</label>
                                        [text insuranceCompName class:form-control]
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label class="custom-lebel read-only">Telephone</label>
                                        [text insuranceCompPhone class:form-control]
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 pad0">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label class="custom-lebel"><strong>Claims Address </strong></label>
                                        [textarea claimsAddress class:form-control 40x3]
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 pad0">
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label class="custom-lebel read-only">City</label>
                                        [text insuranceCity class:form-control]
                                    </div>  
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label class="custom-lebel read-only">State</label>
                                        [text insuranceCompState class:form-control]
                                    </div>  
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label class="custom-lebel read-only">Zip</label>
                                        [text insuranceCompZip class:form-control]
                                    </div>  
                                </div>
                            </div>
                            <div class="col-xs-12 pad0">
                                <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
                                    <div class="form-group">
                                        <label class="custom-lebel">Name of Insured</label>
                                        [text NameOfInsured class:form-control]
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label class="custom-lebel read-only">Date of Birth</label>
                                        [text dobOfInsured class:form-control placeholder "mm/dd/yy"]
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 pad0">
                                <div class="form-group">
                                    <label class="custom-lebel col-xs-12">Relationship of Patient to Insured</label>
                                    <div class="checkbox col-md-3">
                                        <label>[checkbox relationshipPatientInsured "Self"]</label>
                                    </div>
                                    <div class="checkbox col-md-3">
                                        <label>[checkbox relationshipPatientInsured "Spouse"]</label>
                                    </div>
                                    <div class="checkbox col-md-3">
                                        <label>[checkbox relationshipPatientInsured "Parent"]</label>
                                    </div>
                                    <div class="checkbox col-md-3">
                                        <label>[checkbox relationshipPatientInsured "Child"]</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 pad0">
                                <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
                                    <div class="form-group">
                                        <label class="custom-lebel">ID #</label>
                                        [text insuranceId class:form-control]
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label class="custom-lebel read-only">Group #</label>
                                        [text insuranceGroup class:form-control
                                    </div>
                                </div>
                            </div>
                            <hr style="clear:both;">
                                <p class="col-xs-12"><strong>B. Secondary Insurance</strong></p>
                            <div class="col-xs-12 pad0">
                                <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
                                    <div class="form-group">
                                        <label class="custom-lebel">Company Name</label>
                                        [text secondaryInsuName class:form-control]
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label class="custom-lebel read-only">Telephone</label>
                                        [text secondaryInsuPhone class:form-control]
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 pad0">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label class="custom-lebel"><strong>Claims Address </strong></label>
                                        [textarea seconderyInsuAddress class:form-control 40x3]
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 pad0">
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label class="custom-lebel read-only">City</label>
                                        [text secondaryInsuCity class:form-control]
                                    </div>  
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label class="custom-lebel read-only">State</label>
                                        [text secondaryInsuState class:form-control]
                                    </div>  
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label class="custom-lebel read-only">Zip</label>
                                        [text secondaryInsuZip class:form-control]
                                    </div>  
                                </div>
                            </div>
                            <div class="col-xs-12 pad0">
                                <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
                                    <div class="form-group">
                                        <label class="custom-lebel">Name of Insured</label>
                                        [text secondaryInsuInsuredName class:form-control]
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label class="custom-lebel read-only">Date of Birth</label>
                                        [text secondaryInsuInsuredDOB class:form-control placeholder "mm/dd/yy"]
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 pad0">
                                <div class="form-group">
                                    <label class="custom-lebel col-xs-12">Relationship of Patient to Insured</label>
                                    <div class="checkbox col-md-3">
                                        <label>[checkbox seconderyRelationshipPatientInsured "Self"]</label>
                                    </div>
                                    <div class="checkbox col-md-3">
                                        <label>[checkbox seconderyRelationshipPatientInsured "Spouse"]</label>
                                    </div>
                                    <div class="checkbox col-md-3">
                                        <label>[checkbox seconderyRelationshipPatientInsured "Parent"]</label>
                                    </div>
                                    <div class="checkbox col-md-3">
                                        <label>[checkbox seconderyRelationshipPatientInsured "Child"]</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 pad0">
                                <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
                                    <div class="form-group">
                                        <label class="custom-lebel">ID #</label>
                                        [text SeconderyInsuranceId class:form-control]
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label class="custom-lebel read-only">Group #</label>
                                        [text SeconderyInsuranceGroup class:form-control]
                                    </div>
                                </div>
                            </div>
                            <hr style="clear:both;">
                                <p class="col-xs-12"><strong>C. Who May We Contact in Case of an Emergency? (someone not living with you)</strong></p>
                            <div class="col-xs-12 pad0">
                                <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
                                    <div class="form-group">
                                        <label class="custom-lebel">Name</label>
                                        [text emergencyName class:form-control]
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label class="custom-lebel read-only">Relationship to Patient</label>
                                        [text emergencyRelationship class:form-control]
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 pad0">
                                <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
                                    <div class="form-group">
                                        <label class="custom-lebel">Home Telephone</label>
                                        [text emergencyPhone class:form-control]
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label class="custom-lebel read-only">Daytime Telephone</label>
                                        [text emergencyDayTimePhone class:form-control]
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 pad0">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label class="custom-lebel"><strong>Address </strong></label>
                                        [textarea emergencyAddress class:form-control 40x3]
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; ?>
