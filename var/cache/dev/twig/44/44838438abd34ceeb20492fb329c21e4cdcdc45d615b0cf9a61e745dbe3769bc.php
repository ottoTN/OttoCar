<?php

/* facture/index.html.twig */
class __TwigTemplate_e6b503dd59f20938bbb04e58cd5a631e591d3f7b9244ed563ef327bb2715a748 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "facture/index.html.twig", 1);
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
        $__internal_bc08a52b1283db8046cfcc9440ed6f4351766af1daf9e5b870123e071a084ac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc08a52b1283db8046cfcc9440ed6f4351766af1daf9e5b870123e071a084ac2->enter($__internal_bc08a52b1283db8046cfcc9440ed6f4351766af1daf9e5b870123e071a084ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "facture/index.html.twig"));

        $__internal_8ce80506f57f6d45568a9a4b20c3c349daee2eb8e62ec305f8b8e479ef78bbc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ce80506f57f6d45568a9a4b20c3c349daee2eb8e62ec305f8b8e479ef78bbc8->enter($__internal_8ce80506f57f6d45568a9a4b20c3c349daee2eb8e62ec305f8b8e479ef78bbc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "facture/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc08a52b1283db8046cfcc9440ed6f4351766af1daf9e5b870123e071a084ac2->leave($__internal_bc08a52b1283db8046cfcc9440ed6f4351766af1daf9e5b870123e071a084ac2_prof);

        
        $__internal_8ce80506f57f6d45568a9a4b20c3c349daee2eb8e62ec305f8b8e479ef78bbc8->leave($__internal_8ce80506f57f6d45568a9a4b20c3c349daee2eb8e62ec305f8b8e479ef78bbc8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec7f7759246034e5a1ef4efe8cf1fef4d55468773740d87270650a302d72af0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec7f7759246034e5a1ef4efe8cf1fef4d55468773740d87270650a302d72af0d->enter($__internal_ec7f7759246034e5a1ef4efe8cf1fef4d55468773740d87270650a302d72af0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6bb7e2e9bcbf0a2853401a308879dc1f3d8197a4e2a3686a225f8956bc760999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bb7e2e9bcbf0a2853401a308879dc1f3d8197a4e2a3686a225f8956bc760999->enter($__internal_6bb7e2e9bcbf0a2853401a308879dc1f3d8197a4e2a3686a225f8956bc760999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Factures list</h1>

    <table>
        <thead>
            <tr>
                <th>Tariffacture</th>
                <th>Statutfacture</th>
                <th>Piece</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["factures"]) ? $context["factures"] : $this->getContext($context, "factures")));
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("facture_show", array("id" => $this->getAttribute($context["facture"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "tariffacture", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "statutfacture", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "Piece", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("facture_show", array("id" => $this->getAttribute($context["facture"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("facture_edit", array("id" => $this->getAttribute($context["facture"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("facture_new");
        echo "\">Create a new facture</a>
        </li>
    </ul>
";
        
        $__internal_6bb7e2e9bcbf0a2853401a308879dc1f3d8197a4e2a3686a225f8956bc760999->leave($__internal_6bb7e2e9bcbf0a2853401a308879dc1f3d8197a4e2a3686a225f8956bc760999_prof);

        
        $__internal_ec7f7759246034e5a1ef4efe8cf1fef4d55468773740d87270650a302d72af0d->leave($__internal_ec7f7759246034e5a1ef4efe8cf1fef4d55468773740d87270650a302d72af0d_prof);

    }

    public function getTemplateName()
    {
        return "facture/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 40,  110 => 35,  98 => 29,  92 => 26,  85 => 22,  81 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Factures list</h1>

    <table>
        <thead>
            <tr>
                <th>Tariffacture</th>
                <th>Statutfacture</th>
                <th>Piece</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for facture in factures %}
            <tr>
                <td><a href=\"{{ path('facture_show', { 'id': facture.id }) }}\">{{ facture.tariffacture }}</a></td>
                <td>{{ facture.statutfacture }}</td>
                <td>{{ facture.Piece }}</td>
                <td>{{ facture.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('facture_show', { 'id': facture.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('facture_edit', { 'id': facture.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('facture_new') }}\">Create a new facture</a>
        </li>
    </ul>
{% endblock %}
", "facture/index.html.twig", "J:\\_1NewME\\Freelance\\Symfony\\Garage\\Garage\\app\\Resources\\views\\facture\\index.html.twig");
    }
}
