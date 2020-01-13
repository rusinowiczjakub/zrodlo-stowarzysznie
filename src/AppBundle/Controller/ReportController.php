<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ReportController extends Controller
{
    /**
     * @Route("/reports/{year}", name="reports")
     */
    public function reportsByDate($year = null)
    {
        $reportRepo = $this->getDoctrine()->getRepository('AppBundle:Report');
        $reports = $reportRepo->findBy([], ['date' => 'ASC']);

        $years = [];
        foreach ($reports as $report) {
            $years[] = $report->getDate()->format("Y");
        }
        $years = array_unique($years);

        if ($year !== null) {
            $reportsByYear = $reportRepo->findByYear($year);

            return $this->render('front/reports.html.twig', [
                'years' => $years,
                'reports' => $reportsByYear
            ]);
        }

        if ( $year == null && !empty($reports) ) {
            $mostActualReports = $reportRepo->findByYear(max($years));

            return $this->render('front/reports.html.twig', [
                'years' => $years,
                'reports' => $mostActualReports
            ]);
        }

        return $this->render('front/reports.html.twig');

    }

}
