<?php

/* compte/edit.html.twig */
class __TwigTemplate_3fbd77f84edcd83455a526db778bd3d6ef5d28326d2032a2748373faf7c28779 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_969103453173fca5285c72ae9dea18afdac6a3648cf8eb7b065dc5dce1702c78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_969103453173fca5285c72ae9dea18afdac6a3648cf8eb7b065dc5dce1702c78->enter($__internal_969103453173fca5285c72ae9dea18afdac6a3648cf8eb7b065dc5dce1702c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "compte/edit.html.twig"));

        $__internal_67cd200d9e8f9d700f0a525fe0ab0fef856ab066e7d63949abcaf1bf90e1e370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67cd200d9e8f9d700f0a525fe0ab0fef856ab066e7d63949abcaf1bf90e1e370->enter($__internal_67cd200d9e8f9d700f0a525fe0ab0fef856ab066e7d63949abcaf1bf90e1e370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "compte/edit.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_969103453173fca5285c72ae9dea18afdac6a3648cf8eb7b065dc5dce1702c78->leave($__internal_969103453173fca5285c72ae9dea18afdac6a3648cf8eb7b065dc5dce1702c78_prof);

        
        $__internal_67cd200d9e8f9d700f0a525fe0ab0fef856ab066e7d63949abcaf1bf90e1e370->leave($__internal_67cd200d9e8f9d700f0a525fe0ab0fef856ab066e7d63949abcaf1bf90e1e370_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_fb277e716dc26e7a4891db5ad4998cfc294339292ee560652446c559864aabb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb277e716dc26e7a4891db5ad4998cfc294339292ee560652446c559864aabb7->enter($__internal_fb277e716dc26e7a4891db5ad4998cfc294339292ee560652446c559864aabb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_643047732d2337bcf60628b7380a63570efc8e4f318e87ac9c521c512755b4f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_643047732d2337bcf60628b7380a63570efc8e4f318e87ac9c521c512755b4f0->enter($__internal_643047732d2337bcf60628b7380a63570efc8e4f318e87ac9c521c512755b4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"row-fluid centre\">
        <div class=\"span10\">
<div class=\"widget-box\">
          <div class=\"widget-title\"> <span class=\"icon\"><i class=\"fa fa-id-card-o\"></i></span>
            <h5>Edit Account</h5>
            
          </div>
          <div class=\"widget-content nopadding\">
    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
         <div class=\"control-group\">
                            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cinprop", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "C.I.N"));
        echo "
                            <div class=\"controls\">
                              ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cinprop", array()), 'widget', array("attr" => array("class" => "cin")));
        echo "
                            </div>
                          </div>

                           <div class=\"control-group\">
                            <label class=\"control-label\">First name :</label>
                            <div class=\"controls\">
                                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prenomprop", array()), 'widget', array("attr" => array("class" => "span6", "placeholder" => "First name")));
        echo "
                            </div>
                        </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\">Last name :</label>
                            <div class=\"controls\">
                                
                                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nomprop", array()), 'widget', array("attr" => array("class" => "span6", "placeholder" => "Last name")));
        echo "
                            </div>
                        </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\">Phone :</label>
                            <div class=\"controls\">
                                
                                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "telprop", array()), 'widget', array("attr" => array("class" => "mask-phone span2 mask text ", "placeholder" => "22 33 66 44", "id" => "mask-phone")));
        echo "
                            </div>
                        </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\">Address :</label>
                            <div class=\"controls\">
                                
                                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "adresseprop", array()), 'widget', array("attr" => array("class" => "span11", "placeholder" => "0 Street New York City")));
        echo "
                            </div>
                        </div>
                          <div class=\"control-group\">
                            <label class=\"control-label\">Email :</label>
                            <div class=\"controls\">
                              ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "mailprop", array()), 'widget', array("attr" => array("class" => "span8 email", "placeholder" => "example example.com", "id" => "email", "name" => "email")));
        echo "
                            </div>
                          </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\">Car brand :</label>
                            <div class=\"controls\">
                                <select id=\"cars\" required></select>
                                
                            </div>
                        </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\">Car version :</label>
                            <div class=\"controls\">
                                <select id=\"versions\" required></select>
                                
                            </div>
                        </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\">Plate License :</label>
                            <div class=\"controls\">
                                ";
        // line 71
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "immatvoit", array()), 'widget', array("attr" => array("class" => "span6 mask-plate")));
        echo "
                            </div>
                        </div>

        <input type=\"submit\" class=\"btn btn-success\" value=\"Edit\" />
    ";
        // line 76
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
</div>
</div>
</div>
</div>
";
        
        $__internal_643047732d2337bcf60628b7380a63570efc8e4f318e87ac9c521c512755b4f0->leave($__internal_643047732d2337bcf60628b7380a63570efc8e4f318e87ac9c521c512755b4f0_prof);

        
        $__internal_fb277e716dc26e7a4891db5ad4998cfc294339292ee560652446c559864aabb7->leave($__internal_fb277e716dc26e7a4891db5ad4998cfc294339292ee560652446c559864aabb7_prof);

    }

    public function getTemplateName()
    {
        return "compte/edit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  149 => 76,  141 => 71,  118 => 51,  109 => 45,  99 => 38,  89 => 31,  79 => 24,  69 => 17,  64 => 15,  59 => 13,  48 => 4,  30 => 3,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

{% block body %}

<div class=\"row-fluid centre\">
        <div class=\"span10\">
<div class=\"widget-box\">
          <div class=\"widget-title\"> <span class=\"icon\"><i class=\"fa fa-id-card-o\"></i></span>
            <h5>Edit Account</h5>
            
          </div>
          <div class=\"widget-content nopadding\">
    {{ form_start(edit_form,{'attr': {'class': 'form-horizontal'}}) }}
         <div class=\"control-group\">
                            {{ form_label(edit_form.cinprop, \"C.I.N\", {'label_attr': {'class': 'control-label'}}) }}
                            <div class=\"controls\">
                              {{ form_widget(edit_form.cinprop, {'attr': {'class': 'cin'}}) }}
                            </div>
                          </div>

                           <div class=\"control-group\">
                            <label class=\"control-label\">First name :</label>
                            <div class=\"controls\">
                                {{ form_widget(edit_form.prenomprop, {'attr': {'class' : 'span6','placeholder': 'First name'} } ) }}
                            </div>
                        </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\">Last name :</label>
                            <div class=\"controls\">
                                
                                {{ form_widget(edit_form.nomprop, {'attr': {'class' : 'span6','placeholder': 'Last name'} } ) }}
                            </div>
                        </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\">Phone :</label>
                            <div class=\"controls\">
                                
                                {{ form_widget(edit_form.telprop, {'attr': {'class' : 'mask-phone span2 mask text ','placeholder': '22 33 66 44','id' : 'mask-phone'} } ) }}
                            </div>
                        </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\">Address :</label>
                            <div class=\"controls\">
                                
                                {{ form_widget(edit_form.adresseprop, {'attr': {'class' : 'span11','placeholder': '0 Street New York City'} } ) }}
                            </div>
                        </div>
                          <div class=\"control-group\">
                            <label class=\"control-label\">Email :</label>
                            <div class=\"controls\">
                              {{ form_widget(edit_form.mailprop, {'attr': {'class' : 'span8 email','placeholder': 'example example.com' ,'id': 'email','name': 'email'} } ) }}
                            </div>
                          </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\">Car brand :</label>
                            <div class=\"controls\">
                                <select id=\"cars\" required></select>
                                
                            </div>
                        </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\">Car version :</label>
                            <div class=\"controls\">
                                <select id=\"versions\" required></select>
                                
                            </div>
                        </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\">Plate License :</label>
                            <div class=\"controls\">
                                {{ form_widget(edit_form.immatvoit, {'attr': {'class' : 'span6 mask-plate'}},{'attr':{'placeholder': 'Plate Number'}},{'attr':{'id': 'mask-plate'} } ) }}
                            </div>
                        </div>

        <input type=\"submit\" class=\"btn btn-success\" value=\"Edit\" />
    {{ form_end(edit_form) }}
</div>
</div>
</div>
</div>
{% endblock %}
", "compte/edit.html.twig", "J:\\_1NewME\\Freelance\\Symfony\\OttoCar\\app\\Resources\\views\\compte\\edit.html.twig");
    }
}
