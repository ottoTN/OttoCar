<?php

/* piece/index-worker.html.twig */
class __TwigTemplate_bd8b4ee0917c058088d8412d57d8b8e463ba7c38476bbbbf1df85b140367bbcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "piece/index-worker.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1281347ac218456b22136d972341841ac8408c4aabee167ec937ac07c81efad4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1281347ac218456b22136d972341841ac8408c4aabee167ec937ac07c81efad4->enter($__internal_1281347ac218456b22136d972341841ac8408c4aabee167ec937ac07c81efad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "piece/index-worker.html.twig"));

        $__internal_1d4554e263b037d25bacf2d882b35740243cf1ba0004f6804d8ba5026e5e8e7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d4554e263b037d25bacf2d882b35740243cf1ba0004f6804d8ba5026e5e8e7e->enter($__internal_1d4554e263b037d25bacf2d882b35740243cf1ba0004f6804d8ba5026e5e8e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "piece/index-worker.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1281347ac218456b22136d972341841ac8408c4aabee167ec937ac07c81efad4->leave($__internal_1281347ac218456b22136d972341841ac8408c4aabee167ec937ac07c81efad4_prof);

        
        $__internal_1d4554e263b037d25bacf2d882b35740243cf1ba0004f6804d8ba5026e5e8e7e->leave($__internal_1d4554e263b037d25bacf2d882b35740243cf1ba0004f6804d8ba5026e5e8e7e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b58324b584b6d52bbeba6f834a2f5e85c42470a6a1b5b54b1d384a6ed9984ce4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b58324b584b6d52bbeba6f834a2f5e85c42470a6a1b5b54b1d384a6ed9984ce4->enter($__internal_b58324b584b6d52bbeba6f834a2f5e85c42470a6a1b5b54b1d384a6ed9984ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_944333cb5178dd6692cc32fba53fd2ea97028c302a820f5d879aaacae59c4676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_944333cb5178dd6692cc32fba53fd2ea97028c302a820f5d879aaacae59c4676->enter($__internal_944333cb5178dd6692cc32fba53fd2ea97028c302a820f5d879aaacae59c4676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   <div class=\"widget-box\">
          <div class=\"widget-title\"><span class=\"icon\"><i class=\"fa fa-wrench\"></i></span>
            <h5>All Parts</h5>
          </div>
          <div class=\"widget-content nopadding\">
            <table class=\"table table-bordered data-table\">
        <thead>
            <tr>
                  <th>Reference</th>
                  <th>Brand</th>
                  <th>Price (TND)</th>
                  <th>Type</th>
                  <th>Part Wording</th>
                  <th>Available (Yes/No)</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pieces"]) ? $context["pieces"] : $this->getContext($context, "pieces")));
        foreach ($context['_seq'] as $context["_key"] => $context["piece"]) {
            // line 22
            echo "            <tr>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "refpiece", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "marquepiece", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "prixpiece", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "typepiece", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["piece"], "libellepiece", array()), "html", null, true);
            echo "</td>
                <td><button type=\"button\" class=\"btn btn-success\" disabled><i class=\"fa fa-check\"></i></button> <button type=\"button\" class=\"btn btn-danger\" disabled><i class=\"fa fa-times\"></i></button></td>
                <!-- <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("piece_show", array("id" => $this->getAttribute($context["piece"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("piece_edit", array("id" => $this->getAttribute($context["piece"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td> -->
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['piece'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>
          </div></div>

    <ul>
        <li>
            <a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("piece_new");
        echo "\">Create a new piece</a>
        </li>
    </ul>
";
        
        $__internal_944333cb5178dd6692cc32fba53fd2ea97028c302a820f5d879aaacae59c4676->leave($__internal_944333cb5178dd6692cc32fba53fd2ea97028c302a820f5d879aaacae59c4676_prof);

        
        $__internal_b58324b584b6d52bbeba6f834a2f5e85c42470a6a1b5b54b1d384a6ed9984ce4->leave($__internal_b58324b584b6d52bbeba6f834a2f5e85c42470a6a1b5b54b1d384a6ed9984ce4_prof);

    }

    public function getTemplateName()
    {
        return "piece/index-worker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 47,  117 => 41,  105 => 35,  99 => 32,  91 => 27,  87 => 26,  83 => 25,  79 => 24,  75 => 23,  72 => 22,  68 => 21,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
   <div class=\"widget-box\">
          <div class=\"widget-title\"><span class=\"icon\"><i class=\"fa fa-wrench\"></i></span>
            <h5>All Parts</h5>
          </div>
          <div class=\"widget-content nopadding\">
            <table class=\"table table-bordered data-table\">
        <thead>
            <tr>
                  <th>Reference</th>
                  <th>Brand</th>
                  <th>Price (TND)</th>
                  <th>Type</th>
                  <th>Part Wording</th>
                  <th>Available (Yes/No)</th>
            </tr>
        </thead>
        <tbody>
        {% for piece in pieces %}
            <tr>
                <td>{{ piece.refpiece }}</a></td>
                <td>{{ piece.marquepiece }}</td>
                <td>{{ piece.prixpiece }}</td>
                <td>{{ piece.typepiece }}</td>
                <td>{{ piece.libellepiece }}</td>
                <td><button type=\"button\" class=\"btn btn-success\" disabled><i class=\"fa fa-check\"></i></button> <button type=\"button\" class=\"btn btn-danger\" disabled><i class=\"fa fa-times\"></i></button></td>
                <!-- <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('piece_show', { 'id': piece.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('piece_edit', { 'id': piece.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td> -->
            </tr>
        {% endfor %}
        </tbody>
    </table>
          </div></div>

    <ul>
        <li>
            <a href=\"{{ path('piece_new') }}\">Create a new piece</a>
        </li>
    </ul>
{% endblock %}
", "piece/index-worker.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar-BackEnd\\app\\Resources\\views\\piece\\index-worker.html.twig");
    }
}
