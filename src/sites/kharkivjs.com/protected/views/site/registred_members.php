<?php
//    echo "<pre>";
//    print_r($members);
//    echo "</pre>";  
?>
<div class="container">
    <span class="span12">
        <form class="form-search">
            <label>User name</label>
            <input placeholder="Enter username" name = 'userName' type="text" class="input-medium search-query">
            <label>Company name</label>
            <input placeholder="Enter company name" name = 'company' type="text" class="input-medium search-query">
            <label>User's position</label>
            <input placeholder="Enter position" name = 'posotion' type="text" class="input-medium search-query">
            <button type="submit" class="btn">Search</button>
        </form>

    </span>
    <?php
        $form = $this->beginWidget('CActiveForm', array(
                    'id' => 'approval-form',
                    'enableClientValidation' => false,
                    'clientOptions' => array(
                        'validateOnSubmit' => true,
                    ),
                ));
    ?>
    <table class="table table-condensed">
        <thead>
            <tr>
                <th> </th>
                <th>#</th>
                <th>Name</th>
                <th>Company</th>
                <th>Position</th>
                <th>Confirmation</th>
                <th>Approval Status</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach( $members as $member ):  ?>
            <tr>
                <td>
                    <?php echo $form->checkBox($member, 'id['.$member->id.']', array('id' => 'member-id')); ?>
                </td>
                <td>
                    <?php echo $i++; ?>
                </td>
                <td>
                    <?php echo $member->name; ?>
                </td>
                <td>
                    <?php echo $member->company; ?>
                </td>
                <td>
                    <?php echo $member->position; ?>
                </td>
                <td>
                    <?php echo $member->confirmation?"yes":"no"; ?>
                </td>
                <td>
                    <?php echo ($member->approved == "")?"empty":$member->approved; ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <fieldset>
    <div class="row buttons">
        Action:
		<select name="action">
            <option value="approve">approve</option>
            <option value="unapprove">unapprove</option>
            <option value="request">send request for approval participation</option>
        </select>
	</div>
    <div class="row buttons">
		<?php echo CHtml::submitButton('Submit', array( 'id' => "submit")); ?>
	</div>
    </fieldset>
   <?php $this->endWidget(); ?>

</div>
