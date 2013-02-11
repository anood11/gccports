<?php
class Paging {

		var $totalPages=0;
		var $page=1;
		var $pageLimit=100;
		var $totalRecords=0;		
		
    public function getPagingAttributes($page, $pageLimit, $totalRecords) {

		$this->totalPages = ceil($totalRecords / $pageLimit);
		$this->page = $page;
		$this->pageLimit = $pageLimit;
		$this->totalRecords = $totalRecords;
		
		if($this->page > $this->totalPages){
			$this->page = $this->totalPages;
		}

		if($this->page < 1){
			$this->page = 1;
		}

  	}

    public function preparePagingForm($pageUrl, $formFields) {

$formFieldsAppend = <<< FORMAPPEND
	<form action="{$pageUrl}" method="get" name="frmPaging" id="frmPaging">
	<input type="hidden" name="page" id="page" value="{$this->page}"/>
	<input type="hidden" name="pageLimit" id="pageLimit" value="{$this->pageLimit}"/>
	{$formFields}
	</form>
FORMAPPEND;
		
      return $formFieldsAppend;
  	}

    public function preparePagingTopLinks() {
	
	$strPagingLinks = "";
	if($this->totalPages > 1){
		
		$strPagingLinks .='<div class="listPaging" align="right">';
			if($this->page > 1){ 
				$previous = $this->page-1;
				$strPagingLinks .='<a href="#"  class="previous" onClick="return ('.$previous.');">&lt;&lt;Previous </a>';
			}else{ 
				$strPagingLinks .='&lt;&lt;Previous ';
			}
			for($pCount=1; $pCount<=$this->totalPages; $pCount++){
				if($pCount != $this->page){ 
					$strPagingLinks .='<span ><a href="#" class="active" onClick="return goToPage('.$pCount.');">'.$pCount.' </a></span>';
				}else{ 
					$strPagingLinks .='<span class="active">'.$pCount.' </span>';
				}
			}
			if($this->page < $this->totalPages){ 
				$next = $this->page+1;
				$strPagingLinks .='<a href="#" class="next" class="next" onClick="return goToPage('.$next.');"> Next&gt;&gt;</a>'; 
			}else{ 
				$strPagingLinks .=' Next&gt;&gt;';
			}
		$strPagingLinks .='</div>';
		
	}
		
      return $strPagingLinks;
  	}

    public function preparePagingBottomLinks() {
		
	$strPagingLinks = "";
	if($this->totalPages > 1){
		
		$strPagingLinks .='<div class="listPaging" align="right">';
			if($this->page > 1){ 
				$previous = $this->page-1;
				$strPagingLinks .='<a href="#"  class="previous" onClick="return goToPage('.$previous.');">&lt;&lt;Previous </a>';
			}else{ 
				$strPagingLinks .='&lt;&lt;Previous ';
			}
			for($pCount=1; $pCount<=$this->totalPages; $pCount++){
				if($pCount != $this->page){ 
					$strPagingLinks .='<span ><a href="#" class="active" onClick="return goToPage('.$pCount.');">'.$pCount.' </a></span>';
				}else{ 
					$strPagingLinks .='<span class="active">'.$pCount.' </span>';
				}
			}
			if($this->page < $this->totalPages){ 
				$next = $this->page+1;
				$strPagingLinks .='<a href="#"  class="next" onClick="return goToPage('.$next.');"> Next&gt;&gt;</a>'; 
			}else{ 
				$strPagingLinks .=' Next&gt;&gt;';
			}
		$strPagingLinks .='</div>';
		
	}
		
      return $strPagingLinks;
  	}


}?>