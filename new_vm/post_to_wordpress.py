from wordpress_xmlrpc import Client
from wordpress_xmlrpc.methods import posts
from wordpress_xmlrpc import WordPressPost
from optparse import OptionParser
import shutil
import os
import sys
import datetime

def main():
    (options, args) = parse_options()

    #
    # Check if the file exists
    #
    if not os.path.exists(args[0]):
        print("File:%s does not exists, aborting!" % args[0])
        sys.exit(1)

    new_post_file = open(args[0], 'r')
    new_post_content = new_post_file.read()
    new_post_file.close()

    client = Client('http://192.168.50.50/xmlrpc.php', 'tony', 'tony_wordpress_123')

    now = datetime.datetime.now()
    
    post = WordPressPost()
    post.title = 'My New Post - %s' % now.strftime("%Y-%m-%d_%H_%M_%S")
    post.content = new_post_content
    post.id = client.call(posts.NewPost(post))

    post.post_status = 'publish'
    client.call(posts.EditPost(post.id, post))


def parse_options():
    parser = OptionParser(usage="usage: %prog [options] filename", version="%prog 1.0")

    (options, args) = parser.parse_args()

    if len(args) != 1:
        parser.error("wrong number of arguments")

    return (options, args)


if __name__ == '__main__':
    main()
