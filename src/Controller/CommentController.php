<?php

declare(strict_types=1);

namespace App\Controller;

use Slim\Http\Request;
use Slim\Http\Response;

/**
 * 评论
 *
 * Class CommentController
 * @package App\Controller
 */
class CommentController extends Controller
{
    /**
     * 获取所有评论
     *
     * @param  Request  $request
     * @param  Response $response
     * @return Response
     */
    public function getList(Request $request, Response $response): Response
    {
        return $response;
    }

    /**
     * 获取评论详情
     *
     * @param  Request  $request
     * @param  Response $response
     * @param  int      $comment_id
     * @return Response
     */
    public function get(Request $request, Response $response, int $comment_id): Response
    {
        return $response;
    }

    /**
     * 更新评论
     *
     * @param  Request  $request
     * @param  Response $response
     * @param  int      $comment_id
     * @return Response
     */
    public function update(Request $request, Response $response, int $comment_id): Response
    {
        return $response;
    }

    /**
     * 删除评论
     *
     * @param  Request  $request
     * @param  Response $response
     * @param  int      $comment_id
     * @return Response
     */
    public function delete(Request $request, Response $response, int $comment_id): Response
    {
        return $response;
    }

    /**
     * 批量删除评论
     *
     * @param  Request  $request
     * @param  Response $response
     * @return Response
     */
    public function batchDelete(Request $request, Response $response): Response
    {
        return $response;
    }

    /**
     * 添加投票
     *
     * @param  Request  $request
     * @param  Response $response
     * @param  int      $comment_id
     * @return Response
     */
    public function addVote(Request $request, Response $response, int $comment_id): Response
    {
        $userId = $this->roleService->userIdOrFail();
        $type = $request->getParsedBodyParam('type');

        $voteCount = $this->commentVoteService->addVote($userId, $comment_id, $type);

        return $this->success($response, ['vote_count', $voteCount]);
    }

    /**
     * 获取投票者
     *
     * @param  Request  $request
     * @param  Response $response
     * @param  int      $comment_id
     * @return Response
     */
    public function getVoters(Request $request, Response $response, int $comment_id): Response
    {
        $type = $request->getQueryParam('type');
        $voters = $this->commentVoteService->getVoters($comment_id, $type, true);

        return $this->success($response, $voters);
    }
}
