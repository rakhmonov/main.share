<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if (strlen($arResult["PAGE_URL"]) > 0):
	?>
	<div class="share-window-parent">
	<div id="share-dialog<?echo $arResult["COUNTER"]?>" class="share-dialog share-dialog-<?=$arParams["ALIGN"]?>" style="display: <?=(array_key_exists("HIDE", $arParams) && $arParams["HIDE"] == "Y" ? "none" : "block")?>;">
		<div class="share-dialog-inner share-dialog-inner-<?=$arParams["ALIGN"]?>">
		<? if (is_array($arResult["BOOKMARKS"]) && count($arResult["BOOKMARKS"]) > 0): ?>
            <?$i = 0;?>
			<ul>
			<?
			foreach($arResult["BOOKMARKS"] as $name => $arBookmark)
			{
				?>
                <li class="<?=$arParams['HANDLERS'][$i]?>"><td class="bookmarks"><?=$arBookmark["ICON"]?></td></li>
                <?
                $i++;}?>
			</ul>
		<? endif; ?>
		</div>		
	</div>
	</div>
	<a class="share-switch" href="#" onClick="return ShowShareDialog(<?echo $arResult["COUNTER"]?>);" title="<?=GetMessage("SHARE_SWITCH")?>"></a>
	<?
endif;
?>