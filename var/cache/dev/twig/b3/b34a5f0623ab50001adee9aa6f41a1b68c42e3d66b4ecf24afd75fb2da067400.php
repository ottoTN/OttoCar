<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_d0fb00dbb1b00259e23bd0093ddceffd83f2c421aa8d576646a8d06e811ce37a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_751bbcb85d60c05224d0b6b69905ab583ca7cff3d60f73ecccf63b6fd2b6092c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_751bbcb85d60c05224d0b6b69905ab583ca7cff3d60f73ecccf63b6fd2b6092c->enter($__internal_751bbcb85d60c05224d0b6b69905ab583ca7cff3d60f73ecccf63b6fd2b6092c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_e8163ae152c742cce8d24ba451c5ed33be3584ecea27048ba37c02539492776f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8163ae152c742cce8d24ba451c5ed33be3584ecea27048ba37c02539492776f->enter($__internal_e8163ae152c742cce8d24ba451c5ed33be3584ecea27048ba37c02539492776f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_751bbcb85d60c05224d0b6b69905ab583ca7cff3d60f73ecccf63b6fd2b6092c->leave($__internal_751bbcb85d60c05224d0b6b69905ab583ca7cff3d60f73ecccf63b6fd2b6092c_prof);

        
        $__internal_e8163ae152c742cce8d24ba451c5ed33be3584ecea27048ba37c02539492776f->leave($__internal_e8163ae152c742cce8d24ba451c5ed33be3584ecea27048ba37c02539492776f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
