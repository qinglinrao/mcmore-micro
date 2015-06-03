<xml>
    <ToUserName><![CDATA[{{ $request->FromUserName }}]]></ToUserName>
    <FromUserName><![CDATA[{{ $request->ToUserName }}]]></FromUserName>
    <CreateTime>{{ time() }}</CreateTime>
    <MsgType><![CDATA[news]]></MsgType>
    <ArticleCount>{{ count($content) }}</ArticleCount>
    <Articles>
        @foreach($content as $item)
        <item>
            <Title><![CDATA[{{ $item['Title'] }}]]></Title>
            <Description><![CDATA[{{ $item['Description'] }}]]></Description>
            <PicUrl><![CDATA[{{ $item['PicUrl'] }}]]></PicUrl>
            <Url><![CDATA[{{ $item['Url'] }}]]></Url>
        </item>
        @endforeach
    </Articles>
</xml>