const express = require('express');
const router = express.Router();
const postController = require('../controllers/postController');

// Define routes
router.get('/', postController.index);
router.post('/', postController.store);
router.get('/:id', postController.show);
router.put('/:id', postController.update);
router.delete('/:id', postController.destroy);

module.exports = router;
