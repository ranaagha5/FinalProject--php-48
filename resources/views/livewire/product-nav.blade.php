<div>
<ul class="footer-nav">
    <li><h6><a type="button" id="btnshow" wire:click="$emit('showProducts','all')">All</a></h6></li>
    <li><h6><a  type="button" wire:click="$emit('showProducts','men')" >Men</a></h6></li>
    <li><h6><a type="button"  wire:click="$emit('showProducts','women')">Women</a></h6></li>
    <li><h6><a type="button" wire:click="$emit('showProducts','kids')" >Kids</a></h6></li>
</ul>
</div>

