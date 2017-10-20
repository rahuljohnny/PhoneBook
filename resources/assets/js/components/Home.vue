<template>
    <div>

        <nav class="panel column is-offset-2 is-8" >
            <p class="panel-heading">
                Vuejs Phonebook
                <button class="button is-primary is-outlined" >
                    Add New
                </button>
                <span class="is-pulled-right" v-if="loading">
	    	<i class="fa fa-refresh fa-spin fa-2x fa-fw"></i>
	    </span>
            </p>
            <div class="panel-block">
                <p class="control has-icons-left">
                    <input class="input is-small" type="text" placeholder="search" v-model="searchQuery">
                    <span class="icon is-small is-left">
	        <i class="fa fa-search"></i>
	      </span>
                </p>
            </div>


            <a class="panel-block ">
	  	<span class="column is-9">
	    	Marksheet
	  	</span>

        <span class="panel-icon column is-1">
	      <i class="has-text-danger fa fa-trash" aria-hidden="true"></i>
	    </span>

        <span class="panel-icon column is-1">
	      <i class="has-text-info fa fa-edit" aria-hidden="true" ></i>
	    </span><span class="panel-icon column is-1">
	      <i class="has-text-primary fa fa-eye" aria-hidden="true"></i>
	    </span>
            </a>
        </nav>


    </div>
</template>