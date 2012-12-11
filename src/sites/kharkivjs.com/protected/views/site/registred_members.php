<div class="container">
    <span class="span12">
        <form class="form-search" method="POST">
            <label>User name</label>
            <input placeholder="Enter username" name='Search[name]' type="text" class="input-medium search-query">
            <label>Company name</label>
            <input placeholder="Enter company name" name = 'Search[company]' type="text" class="input-medium search-query">
            <label>User's position</label>
            <input placeholder="Enter position" name = 'Search[position]' type="text" class="input-medium search-query">
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
                <th> <input id="member-ids" value="1" type="checkbox">  </th>
                <th><a href="?orderField=id&order=<?php echo $order=='asc'?'desc':'asc'; ?> ">#</a></th>
                <th><a href="?orderField=name&order=<?php echo $order=='asc'?'desc':'asc'; ?> ">Name</a></th>
                <th><a href="?orderField=company&order=<?php echo $order=='asc'?'desc':'asc'; ?> ">Company</a></th>
                <th><a href="?orderField=position&order=<?php echo $order=='asc'?'desc':'asc'; ?> ">Position</a></th>
                <th><a href="?orderField=confirmation&order=<?php echo $order=='asc'?'desc':'asc'; ?> ">Confirmation</a></th>
                <th><a href="?orderField=approved&order=<?php echo $order=='asc'?'desc':'asc'; ?> ">Approval Status</a></th>
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
                    <?php echo $i++ ?>
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
            <option value="inform">send information mail</option>
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
