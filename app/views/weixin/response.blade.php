<xml>
	<ToUserName><![CDATA[{{ $request->FromUserName }}]]></ToUserName>
	<FromUserName><![CDATA[{{ $request->ToUserName }}]]></FromUserName>
	<CreateTime>{{ time() }}</CreateTime>
	<MsgType><![CDATA[text]]></MsgType>
	<Content><![CDATA[{{ $content }}]]></Content>
</xml>