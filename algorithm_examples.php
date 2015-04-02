<?php
/*
*	Name: Algorithm Examples in PHP
*	Disclaimer:  These examples are taken directly from GeeksForGeeks.org and are intended for the purpose of learning. 
*				 This example shows how these algorithms can be implmeneted in PHP.
*	References(s): http://www.geeksforgeeks.org/618/
*/

class node{
	function __construct(){
		$this->data;
		$this->left;
		$this->right;
	}
}

class newNode extends node{
	function __construct($data){
		$this->data = $data;
		$this->left = NULL;
		$this->right = NULL;
		
		return $this;
	}
}


/* Given a binary tree, print its nodes according to the
  "bottom-up" postorder traversal. */
function printPostorder($node){
	
	if ($node == NULL){
		return;
	}

     // first recur on left subtree
     printPostorder($node->left);

     // then recur on right subtree
	 printPostorder($node->right);

     // now deal with the node
     printf("%d ", $node->data);	

}

function printInorder($node){
	
	if ($node == NULL){
		return;
	}

     // first recur on left subtree
     printInorder($node->left);

     /* then print data of node */
     printf("%d ", $node->data);     

     // first recur on right subtree
     printInorder($node->right);
}

function printPreorder($node){
	
	if ($node == NULL){
		return;
	}

     /* first print data of the node */
     printf("%d ", $node->data); 

     // then recur on left subtree
     printInorder($node->left);    

     // now recur on right subtree
     printInorder($node->right);
}

// Lets Run this Program

$root = new newNode(1);
$root->left = new newNode(2);
$root->right = new newNode(3);
$root->left->left = new newNode(4);
$root->left->right = new newNode(5);


printf("\n Preorder traversal of binary tree is \n");
printPreorder($root);

printf("\n Inorder traversal of binary tree is \n");
printInorder($root);

printf("\n Postorder traversal of binary tree is \n");
printPostorder($root);

