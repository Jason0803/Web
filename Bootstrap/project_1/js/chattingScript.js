/*
 *  For the function which makes the thread (Jumbotron) a chat room
 *  This will be changed to live chatting service (synchronized).
 *  Soo Young Choi. 2017/09/19
 */

$(function() {
    $('button').click(function() {
    	var str;
    	switch(this.id) {
			case 'sendMsg_1': {
    			str = $('#inputMsg_1').val();
        		$('#myClass').append('<p>(174) 최수영 : ' + str +' (17.09.18)</p>');
        		break;
    		}
    		case 'sendMsg_2' : {
    			str = $('#inputMsg_2').val();
    			$('#allClass').append('<p>(174) 최수영 : ' + str +' (17.09.18)</p>');
    			break;
    		}
    	}
    });
});